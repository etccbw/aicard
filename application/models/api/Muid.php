<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Muid extends CI_Model{
	function __construct()
	{
	    parent::__construct();
		$this->load->database();
	}
	public function getuid($userinfo)
	{
    $openId = $userinfo['openId'];
		$rs = $this->db->select('id')
				   ->from('user_info')
				   ->where(['openId'=>$openId])
				   ->get()
				   ->row_array();
		if(!$rs)
		{
	      $data = array(
	        'openId'	=>$openId,
	        'nickName'	=>$userinfo['nickName'],
	        'gender'	=>$userinfo['gender'],
	        'language'	=>$userinfo['language'],
	        'city'		=>$userinfo['city'],
	        'province'	=>$userinfo['province'],
	        'country'	=>$userinfo['country'],
	        'avatarUrl'	=>$userinfo['avatarUrl'],
	      );
	      $this->db->insert('user_info',$data);
	      $rs = $this->db->insert_id();
	      $card_data = [
	      	'uid'		=>$rs,
	      	'username'	=>$userinfo['nickName'],
	      	'avatar'	=>$userinfo['avatarUrl'],
	      ];
	      $this->db->insert('card',$card_data);
    	}
    	return $rs;
	}
}