<?php
class Enshrine extends MW_Controller {
    
    public function _init()
    {
        $this->load->helper('valid');
        $this->load->model('region_model', 'region');
    }
    
    /**
	 * @收藏列表
	 */
	public function index() {
		
	    $param['uid'] = 12;
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/enshrineList', $param, 'post'));
	    $data['res'] = $res->messages;
	    if ($res->status) {
	        $this->load->view('ucenter/enshrine', $data);
	    } else {
	        $this->redirect('ucenter/Address/show404');
	    }
	}
	
	/**
	 * @新增收藏
	 * */
	public function addPost($goods_id = 0)
	{
	    $param['uid'] = 12;
	    $param['goods_id'] = $goods_id;
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/insertMallEnshrine', $param, 'post'));
	    
	    if ($res->status) {
	        $this->jsonMessage('', 'ucenter/Enshrine/index');
	    } else {
	        $this->jsonMessage('操作失败', 'ucenter/Enshrine/index');
	    }
	}
	
	/**
	 * @删除删除
	 * */
	public function delete($enshrine_id = 0) {
	    
	    $param['uid'] = 12;
	    $param['enshrine_id'] = $enshrine_id; 
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/deleteMallEnshrine', $param, 'post'));
	  
	    if ($res->status) {
	        $this->redirect('ucenter/Address/index');
	    } else {
	        $this->redirect('ucenter/Address/show404');
	    }
	}
	
	
	
	
}