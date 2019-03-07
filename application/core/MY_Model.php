<?php
class MY_Model extends CI_Model{
    public $admininfo=false;
    public $storeinfo = false;
    public function __construct() {
	parent::__construct();
	$this->load->database();
	$this->admininfo = $this->getAdminInfo();
	$this->load->library('session');
	$this->storeinfo = $this->session->storeinfo;
    }
    private function getAdminInfo(){
	$this->load->library('session');
	$userinfo = $this->session->userinfo;
	if($userinfo){
	    $rs = $this->db
		    ->select('*')
		    ->from('admin')
		    ->where($userinfo)
		    ->get();
	    if($rs){
		$data = $rs->result_array();
		return $data[0];
	    }else{
		return FALSE;
	    }
	}
	return FALSE;
    }
}