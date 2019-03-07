<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
class Login extends CI_Controller{
	 public function __construct() {
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('admin/Madmin','ma');
    }
	public function index(){
		$this->load->helper('url');
        $this->load->library('session');
        $data = $this->session->userinfo;
        if($this->session->userinfo['admin'] == 1){
	    redirect('/admin/Home');
	}
	//$data = $this->element();
	$data['header'] = $this->load->view('common/header','',true);
	$data['footer_js'] = $this->load->view('common/footer','',true);
	$data['info'] = $this->input->get('error');
    $this->load->view('admin/login',$data);
    }
    public function loginIn(){
	$this->load->helper('url');
	$password = $this->input->post('password');
	$user_name = $this->input->post('username');
	$this->load->model('admin/Mlogin','l');
	$rs  = $this->l->login($user_name);
	$this->load->library('session');
	if($rs){
	   if($rs){
	    $hash =$rs[0]['password'];
	    if(password_verify($password, $hash)){
		$this->session->set_userdata('userinfo',$rs[0]);
		$this->l->setToken($user_name);
		redirect(site_url('/admin/Home/index'));
	    }else{
		redirect(site_url('/admin/login/index'));
	    } 
		}else{
		   redirect(site_url('/admin/login/index'));
		}
    	}
	}
    public function loginOut(){
        $this->load->library('session');
        $this->session->sess_destroy();
        $this->load->helper('url');
        redirect('/admin/login');
    }
}