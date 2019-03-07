<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
class Invitation extends AD_Controller{
	 public function __construct() {
	parent::__construct();
	 $this->load->helper('url');
	 $this->load->model('admin/Minvitation','ai');
    }
   public function  Invitation_list	(){
   	   	$data = $this->element();
   		$this->load->helper('text');
		$this->load->library('pagination');
		$pre_page = 5;
		$pagetotal = $this->ai->get_list_count();
		$config['base_url'] = site_url('/admin/Invitation/Invitation_list');
		$config['total_rows'] = $pagetotal;
		$config['per_page'] = $pre_page;
		$this->pagination->initialize($config);
		$data['paginations'] = $this->pagination->create_links();
		$input = $this->input->get();
		if(!empty($input['per_page'])){
			$page = ($input['per_page']-1)*5;
		}else{
			$page = 0;
		}
		$data['items']  = $this->ai->get_list($pre_page,$page);
		$this->load->view('admin/invitation/Invitation_list',$data);
   }
}