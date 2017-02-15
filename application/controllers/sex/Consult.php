<?php
class Consult extends MW_Controller {
	
	public function _init() {
		
		$this->load->helper('valid');
	}
	
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
	
		$data['captcha'] = $this->getCaptcha();
		$this->load->view('sex/consult/message',$data);
	}
	
	 /**
	 * 产品需求
	 */
	public function need() {
	
		$data['captcha'] = $this->getCaptcha();
		$this->load->view('sex/consult/need',$data);
	}
	
	
	/**
	 * 验证码
	 */
	public function ajaxJsonCaptcha()
	{
		$captcha = $this->getCaptcha(18, 130, 36, 4);
		echo json_encode($captcha);exit;
	}
	
	
	
	/**
	 * 反馈
	*/
	public function feedback() {
		
		$tel     = $this->input->post('tel',true);
		$content = $this->input->post('content',true);
		$captcha = $this->input->post('captcha',true);
		if ($this->validateParam($content)) {
			$this->jsonMessage('请输入您的意见');
		}
		if (mb_strlen($content) < 6 ||  mb_strlen($content) > 100) {
			$this->jsonMessage('意见字数在6到100个字');
		}
		if ($this->validateParam($tel)) {
			$this->jsonMessage('请输入您的手机号码');
		}
		if (!valid_mobile($tel)) {
			$this->jsonMessage('请输入正确的手机号码');
		}
		if ($this->validateParam($captcha)) {
			$this->jsonMessage('请输入验证码');
		}
		if (strtoupper($captcha) != strtoupper(get_cookie('captcha'))) {
			$this->jsonMessage('验证码错误');
		}
		$data['ms_type'] = 1;
		$data['ms_tel'] = $tel;
		$data['ms_content'] = $content;
		$result = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/feedback',$data,'post'));
	    if (empty($result)) {
	    	$this->jsonMessage('提交失败');
	    }
	    if (!$result->status) {
	    	$this->jsonMessage('提交失败');
	    }
	    $this->jsonMessage('',site_url('sex/consult/message'));
	}
}