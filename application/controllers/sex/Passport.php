<?php
class Passport extends MW_Controller {
	
	
	/**
	 * 登录
	 */
	public function login() {
		
		$this->load->view('sex/passport/login',$data=array());
	}
}