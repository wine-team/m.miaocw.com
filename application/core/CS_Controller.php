<?php
class CS_Controller extends MW_Controller
{
    public function __construct()
    {
        parent::__construct();
        $frontUser = get_cookie('frontUser');
        if (!$frontUser) {$this->uid = 12;
//         	$this->redirect($this->config->m_base_url);
        }
    }
    
    public function get_user_info()
    {
        $param['uid'] = $this->uid;
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/userInfor', $param, 'post'));
        if ($res->status) {
            return $res->messages;
        } else {
            $this->redirect($this->config->m_base_url);
        }
    }

}