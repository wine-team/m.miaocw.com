<?php
class Home extends MW_Controller {
	
	 /**
	 * 移动端首页幻灯片
	 */
	public function index() {
		
		if (!$this->cache->memcached->get('wapHomePageCache')) {
			$advert = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/advert','','post'));
			$category = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/homeCategory','','post'));
			$hot = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/homeHot','','post'));
			$data = array(
				'advert' => $advert->messages,
				'category' => $category->messages,
				'hot' => $hot->messages
			);
			$this->cache->memcached->save('wapHomePageCache',$data,365*24*3600);
		} else {
			$data = $this->cache->memcached->get('wapHomePageCache');
		}
		$this->load->view('sex/home/index',$data);
	}
	
	 /**
	 * 移动端分类
	 * memcache 缓存
	 */
	public function category() {
	
		if (!$this->cache->memcached->get('wapCategoryCache')) {
			$category = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/category','','post'));
			$data['category'] = $category->messages;
			$this->cache->memcached->save('wapCategoryCache',$data,365*24*3600);
		} else {
			$data = $this->cache->memcached->get('wapCategoryCache');
		}
		$this->load->view('sex/home/category',$data);
	}
	
	 /**
	 * 物流查询提示
	 */
	public function wl() {
		
		$this->load->view('sex/home/wl');
	}
	
	 /**
	 * 今日抢购
	 */
	public function today() {
	    
		$result = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/getSale',array('sales_id'=>8),'post'));
		$data['cate'] = $result->messages->cate;
		$data['goods'] = $result->messages->goods;
		$this->load->view('sex/home/today',$data);
	}
	
	
	 /**
	 * 热销排行
	 */
	public function hot($sales_id=9) {
	    
		$salesId = empty($sales_id) ?　9 : $sales_id;
		$result = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/getSale',array('sales_id'=>$salesId),'post'));
		$data['sales'] = $result->messages->sales[0];
		$data['cate'] = $result->messages->cate;
		$data['goods'] = $result->messages->goods;
		$this->load->view('sex/home/hot',$data);
	}
	
	 /**
	  * 产品列表页
	 */
	public function search() {
	
		$param = array(
			'keyword' => $this->input->get('keyword',true),
			'cateid' => $this->input->get('cateid',true),
			'order' => $this->input->get('order',true)
		);
		$result = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/search',$param,'post'));
		$data['infor'] = $result->messages->infor;
		$data['ct'] = $result->messages->ct;
		$data['goods'] = $result->messages->goods;
		$this->load->view('sex/goods/list',$data);
	}
	
	 /**
	 * ajax 的seach
	 */
	public function ajaxSeach() {
		
		$param = array(
			'keyword' => $this->input->get('keyword',true),
			'cateid' => $this->input->get('cateid',true),
			'order' => $this->input->get('order',true),
			'pg' => $this->input->get('pg') ? (int)$this->input->get('pg') : 2
		);
		$result = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/search',$param,'post'));
		$data['goods'] = $result->messages->goods;
		echo $this->load->view('sex/goods/ajaxList',$data,true);exit;
	}
	
	 /**
	 * 产品详情
	 */
	public function goods($goodsId=0) {
	    
		if (empty($goodsId)) {
			show_404();
		}
		$result = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/detail',array('goods_id'=>$goodsId),'post'));
		if (!$result->status) {
			show_404();
		}
		$this->seeHistory($goodsId);
		$review = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/goodsReview',array('goods_id'=>$goodsId,'pg'=>1,'pgNum'=>20),'post'));
		$data['goods'] = $result->messages->goods;
		$data['more'] = $result->messages->more;
		$data['review'] = $review->messages;
		$this->load->view('sex/goods/goods',$data);
	}
	
	 /**
	 * 添加购物车
	 */
	public function addToCart() {
		
		$param = array(
			'uid' => $this->uid,
			'goods_id' => (int)$this->input->post('goods_id'),
			'qty' => (int)$this->input->post('qty'),
			'spec' => $this->input->post('spec')
		);
		$result = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/addCart',$param,'post'));
	    if ($result->status) {
	    	$this->jsonMessage('','加入购物车成功');
	    }
	    $this->jsonMessage($result->messages);
	}
	
	 /**
	  * 获取购物车信息
	 */
	public function getCartInfor() {
		
		$result = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/getCartInfor',array('uid'=>$this->uid),'post'));
		echo json_encode(array(
				'status' => $result->status,
				'num' => $result->num,
				'sum' => $result->sum
		));exit;
	}
	
	/**
	 * 浏览记录
	 * @param unknown $tourismGoods
	 */
	public function seeHistory($goods_id)
	{
		$historyPram = array();
		$historyCookie = get_cookie('historyPram');
		if (!empty($historyCookie)) {
			$historyPram = unserialize(base64_decode($historyCookie));
			if (!in_array($goods_id, $historyPram)) {
				array_unshift($historyPram, $goods_id);
			}
			if (count($historyPram) > 6) {
				array_pop($historyPram);
			}
		} else {
			$historyPram[] = $goods_id;
		}
		set_cookie('historyPram', base64_encode(serialize($historyPram)), 14400);
	}
	
	 /**
	 * 搜索无结果
	 */
	public function noresult() {
		
		$this->load->view('sex/home/noresult');
	}
}