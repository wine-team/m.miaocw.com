<?php
class Coupon extends CS_Controller {
    
    public function _init()
    {
        $this->load->helper('valid');
        $this->load->model('region_model', 'region');
    }
    
    /**
	 * 我的优惠劵
	 */
	public function index() {
		
	    $param['uid'] = $this->uid;
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/userCoupn', $param, 'post'));
		$data['res'] = $res->messages;
	    if ($res->status) {
	        $this->load->view('ucenter/coupon', $data);
	    } else {
	        $this->redirect('ucenter/Address/show404');
	    }
	}
	
	/**
	 * @添加优惠券
	 * */
	public function addPost() {
	    
	    $postData = $this->input->post();
	    $param['uid'] = $this->uid;
	    $param['userCoupnNumber'] = $postData['userCoupnNumber'];
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/userCoupn', $param, 'post'));
	    if ($res->status) {
	        $this->redirect('ucenter/Coupon/index');
	    } else {
	        $this->redirect('ucenter/Address/show404');
	    }
	}
	
}