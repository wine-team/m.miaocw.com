<?php
class Home extends MW_Controller {
	
	public function _init() {
		
	}
 	
	 /**
	 * 移动端首页幻灯片
	 */
	public function index() {
		
		$this->load->view('home/index',$data=array());
	}
	
	 /**
	 * 移动端男性
	 */
	public function man() {
	
		$this->load->view('home/man',$data=array());
	}
	
	/**
	 * 女性 
	*/
	public function woman() { 
		
		$this->load->view('home/woman',$data=array());
	}
	
	 /**
	 * 保健
	 */
	public function baojian() {
	
		$this->load->view('home/baojian',$data=array());
	}
	
	/**
	 * 内衣
	 */
	public function neiyi() {
	
		$this->load->view('home/neiyi',$data=array());
	}
	
	 /**
	 * 性感
	 */
	public function xingai() {
	
		$this->load->view('home/xingai',$data=array());
	}
	
	/**
	 * 移动端分类
	 */
	public function category() {
	
		$this->load->view('home/category',$data=array());
	}
	
	/**
	 * 产品列表页
	 */
	public function goodlist() {
		
		$this->load->view('home/list',$data=array());
	}
	
	 /**
	 * 产品详情
	 */
	public function goods(){
		
		$this->load->view('home/goods',$data=array());
	}
	
	 /**
	 * 收藏的商品
	 */
	public function collect() {
		
		$this->load->view('home/collect',$data=array());
	}
	
	 /**
	 * 购物车
	 */
	public function cart() {
		
		$this->load->view('home/cart',$data=array());
	}
	
	 /**
	 * 购物车的无购物
	 */
	public function cartNo() {

		$this->load->view('home/cartno',$data=array());
	}
	
	
	/** 帮助中心*/
	/** 关于我们*/
	public function about() {
		
		$this->load->view('home/about',$data=array());
	}
	
	/**帮助中心 */
	public function help() {
	
		$this->load->view('home/help',$data=array());
	}
	
	/** 反馈 */
	public function message() {
		
		$this->load->view('home/message',$data=array());
	}
	
	 /**
	 * 产品需求
	 */
	public function need() {
		
		$this->load->view('home/need',$data=array());
	}
	
	
	/**app下载*/
	public function app(){
		
		$this->load->view('home/app',$data=array());
	}
}