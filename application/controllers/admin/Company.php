<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
class Company extends AD_Controller{
	 public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin/Mcompany','ac');
    }
    public function company_set(){
    	$data = $this->element();
        $data['action'] = "/admin/Company/company_up";
    	$data['input'] = $this->ac->get_company();
    	$this->load->view('admin/company/company',$data);
    }
    public function company_up(){
        $input = $this->input->post();
        $this->return_ajax($this->ac->up_company());
    }
}