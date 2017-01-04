<?php
class Login extends MW_Controller {
    
    public function _init()
    {
        $this->load->helper('valid');
    }
    
    /**
     * @登录
     * */
    public function index() { 
        
        if ($this->frontUser) {
            $this->redirect($this->config->m_base_url);
        }
        $this->load->view('passport/login');
    }
    
    /**
	 * @登录
	 */
	public function check_login() {
		
	    $param['password'] = $this->input->post('password');
	    $param['username'] = $this->input->post('username');
	    $res = json_decode($this->fn_get_contents($this->config->passport_url.'m/login/grid', $param, 'post'));
	    if ($res->status) { 
	        $userInfor = array(
	            'uid'       => $res->messages->uid,
	            'aliasName' => !empty($res->messages->aliasName) ? $res->messages->aliasName : $res->messages->userPhone,
	            'userPhone' => $res->messages->userPhone,
	            'userEmail' => $res->messages->userEmail,
	            'parentId'  => $res->messages->parentId,
	            'userPhoto' => $res->messages->userPhoto,
	        );
	        set_cookie('frontUser',base64_encode(serialize($userInfor)), 7200);
	        $this->jsonMessage('', 'ucenter/Ucenter/index');
	    } else {
	        $this->jsonMessage('登录失败');
	    }
	}
	
	/**
	 * @注册
	 * */
	public function reg() {
	    
	    if ($this->frontUser) {
	        $this->redirect($this->config->m_base_url);
	    }
	    $this->load->view('passport/reg');
	}
	
	public function check_reg() { 
	    
	    $res = json_decode($this->fn_get_contents($this->config->passport_url.'m/register/doRegister', $this->input->post(), 'post'));
    	if ($res->status) {
    	    $userInfor = array(
    	        'uid'       => $res->messages->uid,
    	        'aliasName' => !empty($res->messages->aliasName) ? $res->messages->aliasName : $res->messages->userPhone,
    	        'userPhone' => $res->messages->userPhone,
    	        'userEmail' => $res->messages->userEmail,
    	        'parentId'  => $res->messages->parentId,
    	        'userPhoto' => $res->messages->userPhoto,
    	    );
    	    set_cookie('frontUser',base64_encode(serialize($userInfor)), 7200);
    	    $this->jsonMessage('', 'ucenter/Ucenter/index');
    	} else {
    	    $this->jsonMessage('登录失败');
    	}
	}
	
	/**
	 * @退出
	 * */
	public function logout() {
	    if (get_cookie('frontUser')) {
	        delete_cookie('frontUser');
	    }
	    $this->cache->memcached->delete('frontUser');
	    $this->redirect($this->config->m_base_url);
	}
	
	/**
	 * @忘记密码
	 * */
	public function forget() {
	    
	    
	}
	
}