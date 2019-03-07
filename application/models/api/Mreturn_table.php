<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mreturn_table extends CI_Model{
	public function addtable($input)
	{
		$this->load->database();
    $data = [
      'uid'             =>$input['uid'],
      'username'        =>$input['username'],
      'tel'             =>$input['tel'],
      'company'         =>$input['company'],
      'duties'          =>$input['duties'],
      'departure_time'  =>$input['departure_time'],
      'remarks'         =>$input['remarks'],
    ];
    $rs = $this->db->insert('invitation',$data);
		return $rs;
	}

}