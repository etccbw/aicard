<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mlogin extends CI_Model{
		function __construct()
	{
    parent::__construct();
		$this->load->database();
	}
  function addusers($input)
  {
    $mid = $input['uid'];
    $uid = $input['car_id'];
    $data = array
    (
     'mid'=>$mid,
     'uid'=>$car_id,
    );
    $this->db->insert('users',$data);
    return $mid;
  }  
}