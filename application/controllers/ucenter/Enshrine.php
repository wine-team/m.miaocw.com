<?php
class Enshrine extends MW_Controller {
    
    public function _init()
    {
        $this->load->helper('valid');
        $this->load->model('region_model', 'region');
    }
    
    /**
	 * 优惠劵
	 */
	public function index() {
		
		$this->load->view('ucenter/enshrine',$data=array());
	}
	
}