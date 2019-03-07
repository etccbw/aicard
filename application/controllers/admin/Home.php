<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
class Home extends AD_Controller{
	public function __construct() {
	parent::__construct();

    }
	public function index(){
		$this->load->helper('url');
		$data = $this->element();
		$this->load->view('admin/main/main',$data);
	}

}