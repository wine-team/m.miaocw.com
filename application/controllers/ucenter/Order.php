<?php
class Order extends MW_Controller {
    
    public function _init()
    {
        $this->load->helper('valid');
        $this->load->model('region_model', 'region');
    }
    
    /**
     * @订单列表
     */
    public function grid() {
    
        $this->load->view('ucenter/order',$data=array());
    }
    
    /**
     * @订单详情
     */
    public function detail() {
    
        $this->load->view('ucenter/detail',$data=array());
    }
	
}