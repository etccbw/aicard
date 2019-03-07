<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mlogin extends CI_Model{
    public function login($user_name){
	$this->load->database();
		$rs = $this->db->select('admin_id,user_name,password')
		->from('admin')
		->where('user_name',$user_name)
		->where('is_effect',1)
		->where('is_del',0)
		->get()
		->result_array();
		return $rs;
    }
    public function setToken($user_name){
	$this->load->database();
	$token  = sha1(uniqid()."xy12x");
	$this->db
	->update('admin',['login_ip'=>$this->input->server("REMOTE_ADDR"),'token'=> $token],['user_name'=>$user_name]);
	$this->load->library('session');
	$userinfo = $this->session->userinfo;
	$userinfo['token'] = $token;
	$this->session->set_userdata('userinfo',$userinfo);
    }
}