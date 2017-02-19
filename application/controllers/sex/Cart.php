<?php
class Cart extends CS_Controller {
	 
	public function _init() {
		$this->load->model('region_model','region');
	}
	 /**
	 * 购物车
	 */
	public function index() {
	   
		$result = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/getCart',array('uid'=>$this->uid),'post'));
		$cart = $result->messages;
		if (empty($cart)) {
			$hot = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/homeHot','','post'));
			$data['hot'] = $hot->messages;
			$this->load->view('sex/cart/cartno',$data);
		} else {
			$data['cart'] = $cart;
			$this->load->view('sex/cart/cart',$data);
		}
	}
	
	 /**
	  * 立即购买
	 */
	public function buy() {
	    		
		$result = json_decode($this->fn_get_contents($this->config->main_base_url.'m/payment/buy',array('uid'=>$this->uid),'post'));
		if (empty($result->messages->cart)) {
			$hot = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/homeHot','','post'));
			$data['hot'] = $hot->messages;
			$this->load->view('sex/cart/cartno',$data);
		} else {
			$userRes = json_decode($this->fn_get_contents($this->config->main_base_url.'m/payment/address',array('uid'=>$this->uid),'post'));
			$address = $userRes->messages->address;
			if (!empty($address)) {
				$data['province_id'] = $address->province_id;
	     		$data['city_id'] = $address->city_id;
	            $data['district_id'] = $address->district_id;
			}
			$data['address'] = $address;
			$data['user'] = $userRes->messages->user;
			$data['coupn'] = $userRes->messages->coupn;
			$data['goods'] = $result->messages;
			$this->load->view('sex/cart/buy',$data);
		}
	}
	
	 /**
	 * 删除购物车的产品
	 */
	public function delete() {
		
		$param = array(
		  	'uid' => $this->uid,
			'goods_id' => (int)$this->input->post('goods_id')	
		);
		$result = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/deleteCart',$param,'post'));
	    if($result->status) {
	    	$this->jsonMessage('',site_url('sex/cart/buy'));
	    }
	    $this->jsonMessage($result->messages);
	}
	
	 /**
	 * 生成订单
	 */
	public function creatOrder() {
		
		
		$param = array(
			'uid' => $this->uid,
			'aliasName' => $this->aliasName,
			'receiver_name' => $this->input->post('receiver_name'),
			'tel' => $this->input->post('tel'),
			'addressId' => $this->input->post('addressId'),
			'province_id' => $this->input->post('province_id'),
			'city_id' => $this->input->post('city_id'),
			'district_id' => $this->input->post('district_id'),
			'detailed' => $this->input->post('detailed'),
			'pay_bank' => $this->input->post('pay_bank'),
			'goods' => json_encode($this->input->post('goods'))
		);
		$result = json_decode($this->fn_get_contents($this->config->main_base_url.'m/payment/createOrder',$param,'post'));
	    if (empty($result)) {
	    	$this->jsonMessage('接口出错');
	    }
	    if ($result->status) {
	    	$this->jsonMessage('',base_url('sex/cart/payment?pay='.$result->messages));
	    }
	    $this->jsonMessage($result->messages);
	}
	
	 /**
	 * 支付订单的
	 * @param number $pay_id
	 */
	public function payment() {
		
		$pay_id = $this->input->get('pay');
		if(empty($pay_id)) {
			show_404();
		}
		$param = array(
			'uid' => $this->uid,
			'pay' => $pay_id
		);
		$result = json_decode($this->fn_get_contents($this->config->main_base_url.'m/payment/order',$param,'post'));
		if (empty($result)) {
			show_404('','接口出错');
		}
		if (!$result->status) {
			show_404('','接口出错');
		}
		$data['goods'] = $result->messages->goods;
		$data['orderInfo'] = $result->messages->order;
		$this->load->view('sex/cart/buyok',$data);
	}
	
	 /**
	 	* 支付
	 */
	public function pay() {
		
		$pay = $this->input->post('pay');
		if (empty($pay)) {
			show_404();
		}
		$param = array(
			'uid' => $this->uid,
			'pay' => $pay
		);
		echo $this->fn_get_contents($this->config->main_base_url.'m/payment/alipayPay',$param,'post');
	}
}