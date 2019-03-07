<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Minspect extends CI_Model{
		function __construct()
	{
    parent::__construct();
		$this->load->database();
	}
  function getcompany($input){
	  $uid = $this->uid;
    $where = [
      'username'   =>$input['name'],
      'tel'    =>$input['tel'],
      'is_del' =>0
    ];
    $rs = $this->db->select('username,company_id,tel,id,position,email')
              ->from('company_member')
              ->where($where)
              ->get()
              ->row_array();
    if(!empty($rs)){
      $data = [
        'uid' => $uid
      ];
      $this->db->update('company_member',$data,['id'=>$rs['id']]);
      $company_message = $this->db->select('company,address,website')
                                  ->from('company')
                                  ->where('id',$rs['company_id'])
                                  ->get()
                                  ->row_array();
      $default_card = [
        'username'    => $rs['username'],
        'company_id'  => $rs['company_id'],
        'duties'      => $rs['position'],
        'tel'         => $rs['tel'],
		'email'       => $rs['email'],
        'company'     => $company_message['company'],
        'address'     => $company_message['address'],
        'is_found'    => 1
      ];
      $this->db->update('card',$default_card,['uid'=>$uid]);
      $rscard = $this->db->select('avatar')
              ->from('card')
              ->where('uid',$uid)
              ->get()
              ->row_array();
      $default_message = [
        'uid'         => $uid,
        'username'    => $rs['username'],
        'avatar'      => $rscard['avatar'],
        'company_id'  => $rs['company_id'],
        'duties'      => $rs['position'],
        'tel'         => $rs['tel'],
		'email'       => $rs['email'],
        'company'     => $company_message['company'],
        'address'     => $company_message['address']
      ];
      
      $this->db->insert('unaudited_card',$default_message);
    }
    return $rs;
  }
  function cardstate($uid){
    $where = [
      'uid' =>$uid
    ];
    $rs['is_found'] = $this->db->select('is_found')
              ->from('card')
              ->where($where)
              ->get()
              ->row_array();
    $rs['is_audited'] = $this->db->select('is_audited')
              ->from('unaudited_card')
              ->where($where)
              ->get()
              ->row_array();
    if(empty($rs['is_audited'])){return "Unaudited";}
    if($rs['is_found'] == 0){return "not active";}
    return "Official business card";
  }
  function card_style($uid){
    $rs = $this->db->select('card_style')
              ->from('card')
              ->where('uid',$uid)
              ->get()
              ->row_array();
    return $rs;
  }
  function up_card_style($input){
    $data = [
      'card_style' =>$input['card_style']
    ];
    $this->db->update('unaudited_card',$data,['uid'=>$input['uid']]);
    $rs = $this->db->update('card',$data,['uid'=>$input['uid']]);
    return $rs; 
  }
}