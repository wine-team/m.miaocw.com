<?php
class Ucenter extends CS_Controller {
    
    public function _init()
    {
        $this->load->helper('valid');
        $this->load->model('region_model', 'region');
    }
    
    /**
	* @会员中心
	*/
	public function index() {
	    
	    $data['user_info'] = $this->get_user_info(); 
		$this->load->view('ucenter/ucenter',$data); 
	}
	
	/**
	 * @个人设置
	 */
	public function setting() {
	
	    $this->load->view('ucenter/setting');
	}
	
	/**
	 * @个人资料
	 */
	public function profile() {
	
	    $sex_arr = array('0'=>'保密', '1'=>'男', '2'=>'女');
	    $user_info = $this->get_user_info();
	    $data['alias_name'] = $user_info->alias_name;
	    $data['photo'] = $user_info->photo;
	    $data['sex']   = $sex_arr[$user_info->sex];
	    $data['email'] = $user_info->email;
	    $data['phone'] = $user_info->phone;
	    $this->load->view('ucenter/profile', $data);
	}
	
	public function update_user_info()
	{
	    $postData = $this->input->post();
	    $user_info = $this->get_user_info();
	    $old_photo = in_array($user_info->photo, user_photo()) ? '' : $user_info->photo;
	    $param = array();
	    if (!empty($_FILES['photo']['name'])) { 
	        $imageData = $this->dealWithImages('photo', $old_photo,'common/touxiang');
	    }
	    if (isset($postData['alias_name'])) $param['alias_name'] = $postData['alias_name'];
	    if (isset($imageData['file_name'])) $param['photo'] = $imageData['file_name'];
	    if (isset($postData['sex'])) $param['sex'] = $postData['sex'];
	    if (isset($postData['email']) && !$this->is_exist($postData['email'])) {
	        $param['email'] = $postData['email'];
	    }
	    if (isset($postData['phone']) && !$this->is_exist($postData['phone'])) {
	        if ($postData['code']) {
	            $param['phone'] = $postData['phone'];
	        }
	    } 
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/updateUserInfor', $param, 'post'));
	   
	    if ($res->status) {
	        $this->jsonMessage('', 'ucenter/Ucenter/index');
	    } else {
	        $this->jsonMessage('操作失败', 'ucenter/Ucenter/profile');
	    }
	}
	
	public function is_exist($data) {
	    
	    if(valid_mobile($data)) {
	        $param['phone'] = $data;
	    } else {
	        $param['email'] = $data;
	    }
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/isExist', $param, 'post'));
	    return $res->status;
	}
	
	/**
	 * @发送验证码
	 * */
	public function sendYzm() {
	    
	    $param['phone'] = $this->input->get('mobile');
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/sendYzm', $param, 'post'));  
	    if ($res->status) {
	        $this->jsonMessage('', 'ucenter/Ucenter/index');
	    } else {
	        $this->jsonMessage('操作失败');
	    }
	}
    
	/**
	 * @修改密码
	 */
	public function password() {
	
	    $this->load->view('ucenter/password');
	}
	
	public function reset_pwd()
	{
	    $postData = $this->input->post();
	    $param['uid'] = $this->uid;
	    $param['oldPw'] = $postData['oldPw'];
	    $param['newPw'] = $postData['newPw'];
	    $param['newConfirmPw'] = $postData['newConfirmPw']; 
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/modifyPass', $param, 'post'));
	     
	    if ($res->status) {
	        $this->redirect('ucenter/Ucenter/index');
	    } else {
	        $this->redirect('ucenter/Address/show404');
	    }
	}
	
	/**
	 * @获取浏览历史
	 * */
	public function get_history()
	{
	    $param['uid'] = $this->uid;
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/getHistory', $param, 'post'));
	    $data['res'] = $res->messages;
	    if ($res->status) {
	        $this->load->view('ucenter/history', $data);
	    } else {
	        $this->redirect('ucenter/address/show404');
	    }
	}
	
	public function load_app() {
	   
	    $this->load->view('ucenter/load_app');
	}
	
}