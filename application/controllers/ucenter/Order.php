<?php
class Order extends CS_Controller {
    
    public function _init()
    {
        $this->load->helper('valid');
        $this->load->model('region_model', 'region');
    }
    
    /**
     * @订单列表
     */
    public function grid() {
    
        $param['uid'] = $this->uid;
        $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/getOrderList', $param, 'post'));
        $data['res'] = $res->messages;
        $data['status_arr'] = array('1'=>'取消订单', '2'=>'未付款', '3'=>'已付款', '4'=>'已发货', '5'=>'已收货', '6'=>'已评价');
        if ($res->status) {
            $this->load->view('ucenter/order', $data);
        } else {
            $this->redirect('ucenter/Address/show404');
        }
    }
    
    /**
     * @订单详情
     */
    public function detail($order_id = 0) {
    
        $this->load->view('ucenter/detail',$data=array());
    }
    
    /**
     * @取消
     * */
    public function cancel($order_id = 0) {
       
        $param['uid'] = $this->uid;
        $param['order_id'] = $order_id;
        $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/cancelOrder', $param, 'post'));
        if ($res->status) {
            $this->redirect('ucenter/Order/grid');
        } else {
            $this->redirect('ucenter/Address/show404');
        }
    }
    
    /**
     * @评价订单
     * */
    public function review($order_id = 0) {
        
        $postData = $this->input->post();
        $param['uid'] = $this->uid;
        $param['order_id'] = $order_id;
        $param['user_name'] = $postData['user_name'];
        $param['content'] = $postData['content'];
        $param['score'] = $postData['score'];
        $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/orderReview', $param, 'post'));
        if ($res->status) {
            $this->redirect('ucenter/Order/grid');
        } else {
            $this->redirect('ucenter/Address/show404');
        }
    }
    
    /**
     * @退款
     * */
    public function refund($order_id = 0) {
        
        $postData = $this->input->post();
        $param['uid'] = $this->uid;
        $param['order_id'] = $order_id;
        $param['user_name'] = $postData['user_name'];
        $param['cellphone'] = $postData['cellphone'];
        $param['refund_content'] = $postData['refund_content'];
        $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/orderRefund', $param, 'post'));
        if ($res->status) {
            $this->redirect('ucenter/Order/grid');
        } else {
            $this->redirect('ucenter/Address/show404');
        }
    }
    
    
    
	
}