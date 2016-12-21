<?php
class Home extends MW_Controller {
	
	public function _init() {
		
	}
 	
	 /**
	 * 移动端首页幻灯片
	 */
	public function index() {
		
		$this->load->view('sex/home/index',$data=array());
	}
	
	 /**
	 * 新品体验
	 */
	public function newgood() {
		
		$this->load->view('sex/home/new',$data=array());
	}
	
	/**
	 * 热销排行
	 */
	public function hot() {
		
		$this->load->view('sex/home/hot',$data=array());
	}
	
	 /**
	 * 今日抢购
	 */
	public function today(){
		
		$this->load->view('sex/home/today',$data=array());
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
	 * 移动端分类
	 */
	public function category() {
	
		$this->load->view('sex/home/category',$data=array());
	}
	
	/**
	 * 产品列表页
	 */
	public function goodlist() {
		
		$this->load->view('sex/home/list',$data=array());
	}
	
	 /**
	 * 搜索无结果
	 */
	public function noresult() {
		
		$this->load->view('sex/home/noresult',$data=array());
	}
	
	 /**
	 * 产品详情
	 */
	public function goods(){
		
		$this->load->view('sex/home/goods',$data=array());
	}
	
	 /**
	 * 收藏的商品
	 */
	public function collect() {
		
		$this->load->view('sex/home/collect',$data=array());
	}
	
	 /**
	 * 购物车
	 */
	public function cart() {
		
		$this->load->view('sex/home/cart',$data=array());
	}
	
	 /**
	 * 立即购买
	 */
	public function buy() {
		
		$this->load->view('sex/home/buy',$data=array());
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
	 * 购物车的无购物
	 */
	public function cartNo() {

		$this->load->view('sex/home/cartno',$data=array());
	}
	
	/**
	 * 购物车的无购物
	 */
	public function login() {
	
		$this->load->view('sex/home/login',$data=array());
	}
	
	/**
	 * 注册
	 */
	public function reg() {
		
		$this->load->view('sex/home/reg',$data=array());
	}
	
	public function forget() {
		
		echo '建设中';
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
	 * 收藏历史
	 */
	public function history() {

		$this->load->view('sex/home/history',$data=array());
	}
	
	/**
	 * 优惠劵
	 */
	public function yhj() {
		
		$this->load->view('sex/home/yhj',$data=array());
	}
	
	 /**
	 * 订单列表业
	 */
	public function order() {
		
		$this->load->view('sex/home/order',$data=array());
	}
	
	 /**
	  * 订单列表业
	 */
	public function orderdetail() {
	
		$this->load->view('sex/home/orderdetail',$data=array());
	}
	
	
	/** 帮助中心*/
	/** 关于我们*/
	public function about() {
		
		$this->load->view('sex/home/about',$data=array());
	}
	
	/**帮助中心 */
	public function help() {
	
		$this->load->view('sex/home/help',$data=array());
	}
	
	/** 反馈 */
	public function message() {
		
		$this->load->view('sex/home/message',$data=array());
	}
	
	 /**
	 * 产品需求
	 */
	public function need() {
		
		$this->load->view('sex/home/need',$data=array());
	}
	
	 /**
	 * app下载
	 */
	public function app(){
		
		$this->load->view('sex/home/app',$data=array());
	}
}