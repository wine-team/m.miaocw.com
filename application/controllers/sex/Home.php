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
	
		$result = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/search','','post'));
		$data['ct'] = $result->messages->ct;
		$data['goods'] = $result->messages->goods;
		$this->load->view('sex/goods/list',$data);
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
	 * 移动端男性
	 */
	public function man() {
	
		$this->load->view('sex/home/man',$data=array());
	}
	
	/**
	 * 女性 
	*/
	public function woman() { 
		
		$this->load->view('sex/home/woman',$data=array());
	}
	
	 /**
	 * 保健
	 */
	public function baojian() {
	
		$this->load->view('sex/home/baojian',$data=array());
	}
	
	/**
	 * 内衣
	 */
	public function neiyi() {
	
		$this->load->view('sex/home/neiyi',$data=array());
	}
	
	 /**
	 * 性感
	 */
	public function xingai() {
	
		$this->load->view('sex/home/xingai',$data=array());
	}
	
	 /**
	 * 搜索无结果
	 */
	public function noresult() {
		
		$this->load->view('sex/home/noresult',$data=array());
	}
	
	 /**
	 * 收藏的商品
	 */
	public function collect() {
		
		$this->load->view('sex/home/collect',$data=array());
	}
	
	/**
	 * 生成订单成功
	 */
	public function buyok() {
		
		$this->load->view('sex/home/buyok',$data=array());
	}
	
	/**
	 * 支付成功
	 */
	public function pay() {
		
		$this->load->view('home/pay',$data=array());
	}
	
	/**
	 * 404
	 */
	public function show404() {
	
		$this->load->view('sex/home/show404',$data=array());
	}
	
	 /**
	 * 注册成功
	 */
	public function ucenter() {
	
		$this->load->view('sex/home/ucenter',$data=array());
	}
	
	/**
	 * 设置
	 */
	public function setting() {
		
		$this->load->view('sex/home/setting',$data=array());
	}
	
	/**
	 * 个人资料
	 */
	public function address() {
	
		$this->load->view('sex/home/address',$data=array());
	}
	
	/**
	 * 个人资料
	 */
	public function add_address() {
	
		$this->load->view('sex/home/add_address',$data=array());
	}
	
	/**
	 * 修改密码
	 */
	public function password() {
		
		$this->load->view('sex/home/password',$data=array());
	}
	
	/**
	 * 个人资料
	 */
	public function profile() {
	
		$this->load->view('sex/home/profile',$data=array());
	}
	
	/**
	 * 购物帮助
	 */
	public function shophelp() {
		
		$this->load->view('sex/home/shophelp',$data=array());
	}

	/**
	 * 优惠劵
	 */
	public function yhj() {
		
		$this->load->view('sex/home/yhj',$data=array());
	}

	 /**
	 * app下载
	 */
	public function app(){
		
		$this->load->view('sex/home/app',$data=array());
	}
}