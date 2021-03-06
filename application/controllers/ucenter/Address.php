<?php
class Address extends CS_Controller {
    
    public function _init()
    {
        $this->load->helper('valid');
        $this->load->model('region_model', 'region');
        $this->load->model('mall_address_model', 'mall_address');
    }
    
	/**
	 * @地址列表
	 */
	public function grid() {  
	    
	    $param['uid'] = $this->uid;
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/getAddress', $param, 'post')); 
	    if ($res->status) {
	        $data['res'] = $res->messages;
	        $this->load->view('ucenter/address', $data);
	    } else {
	        $this->redirect('ucenter/address/show404');
	    }
	}
	
	/**
	 * @新增地址
	 */
	public function add() {
	
		$this->load->view('ucenter/add_address');
	}
	
	/**
	 * @新增地址
	 * */
	public function addPost() {
	    
	    $postData = $this->input->post();
	    $region = $this->region->getWhereIn(array($postData['province_id'], $postData['city_id'], $postData['district_id']))->result();
	    $param = array(
	        'province_name' => $region[0]->region_name,
	        'city_name'     => $region[1]->region_name,
	        'district_name' => $region[2]->region_name,
	        'uid'           => $this->uid,
	        'receiver_name' => $postData['receiver_name'],
	        'detailed'      => $postData['detailed'],
	        'tel'           => $postData['tel'],
	        'code'          => (int)$postData['code'],
	        'province_id'   => (int)$postData['province_id'],
	        'city_id'       => (int)$postData['city_id'],
	        'district_id'   => (int)$postData['district_id'],
	        'is_default'    => isset($postData['is_default']) ? $postData['is_default'] : 1,
	    );
	    if (isset($postData['is_default']) && $postData['is_default']==2) {
	        $this->mall_address->setNotDefault($this->uid);
	    }
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/insertAddress', $param, 'post')); 
	    if ($res->status) {
	        $this->redirect('ucenter/address/grid');
	    } else {
	        $this->redirect('ucenter/address/show404');
	    }
	}
	
	public function edit($address_id=0) {

	    $address = $this->mall_address->findById($address_id);
	    if ($address->num_rows() > 0) {
	        $data['res'] = $address->row();
	        $data['province_id'] = $address->row()->province_id;
	        $data['city_id'] = $address->row()->city_id;
	        $data['district_id'] = $address->row()->district_id;
	        $this->load->view('ucenter/edit_address', $data);
	    } else {
	        $this->redirect('ucenter/address/show404');
	    }
	    
	}
	
	public function editPost() {
	     
	    $postData = $this->input->post();
	    $region = $this->region->getWhereIn(array($postData['province_id'], $postData['city_id'], $postData['district_id']))->result();
        $param = array(
            'province_name' => $region[0]->region_name,
            'city_name'     => $region[1]->region_name,
            'district_name' => $region[2]->region_name,
            'uid'           => $this->uid,
            'address_id'    => $postData['address_id'],
            'receiver_name' => $postData['receiver_name'],
            'detailed'      => $postData['detailed'],
            'tel'           => $postData['tel'],
            'code'          => (int)$postData['code'],
            'province_id'   => (int)$postData['province_id'],
            'city_id'       => (int)$postData['city_id'],
            'district_id'   => (int)$postData['district_id'],
            'is_default'    => isset($postData['is_default']) ? $postData['is_default'] : 1,
        );  
        if (isset($postData['is_default']) && $postData['is_default']==2) {
            $this->mall_address->setNotDefault($this->uid);
        }
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/editAddress', $param, 'post'));
	    if ($res->status) {
	        $this->redirect('ucenter/address/grid');
	    } else {
	        $this->redirect('ucenter/address/show404');
	    }
	}
	
	/**
	 * @删除地址
	 */
	public function delete($address_id = 0) {
	    
	    $param['uid'] = $this->uid;
	    $param['address_id'] = $address_id;
	    $res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/deleteAddress', $param, 'post'));
	    if ($res->status) {
	        $this->redirect('ucenter/address/grid');
	    } else {
	        $this->redirect('ucenter/address/show404');
	    }
	}
	
	/**
	 * 404
	 */
	public function show404() {
	
	    $this->load->view('layout/show404');
	}
	
	
}