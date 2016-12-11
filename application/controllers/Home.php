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
	 * 移动端首页幻灯片
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
	 * 移动端首页幻灯片
	 */
	public function category() {
	
		$this->load->view('home/category',$data=array());
	}
}