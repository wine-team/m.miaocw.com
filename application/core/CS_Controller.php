<?php
class CS_Controller extends MW_Controller
{
    public function __construct()
    {
    	parent::__construct();
        if (empty($this->uid)) {
        	$this->redirect($this->config->m_base_url.'sex/home/index.html');
        }
    }
    
    public function get_user_info()
    {
    	$frontUserInfo = $this->user->findByid($this->uid)->row();
    	$order_num = $this->mall_order_base->total($this->uid);
    	$enshrine_num = $this->mall_enshrine->total(array('uid'=>$this->uid));
    	$coupon_num = $this->user_coupon_get->total(array('uid'=>$this->uid));
    	$frontUserInfo->num_list = array('order_num'=>$order_num, 'enshrine_num'=>$enshrine_num, 'coupon_num'=>$coupon_num);
    	return $frontUserInfo;
    }
}