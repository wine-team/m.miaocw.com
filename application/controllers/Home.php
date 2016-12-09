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
	 * 移动端首页幻灯片
	 */
	public function category() {
	
		$this->load->view('home/category',$data=array());
	}
}