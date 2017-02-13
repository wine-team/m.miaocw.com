<?php
class Consult extends MW_Controller {
	
	
	/** 关于我们*/
	public function about() {
	
		$this->load->view('sex/consult/about');
	}
	
	/**  帮助  */
	public function help() {
	
		$this->load->view('sex/consult/help');
	}
	
	/** 反馈 */
	public function message() {
	
		$this->load->view('sex/consult/message');
	}
}