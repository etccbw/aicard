<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mgetcard extends CI_Model{
		function __construct()
	{
		$this->load->database();
	}
	public function Getcardlist($id)
	{
    $where = [
      'id'=>$id,
      'is_found'=>1
    ];
		$rs = $this->db->select('*')
				   ->from('card')
				   ->where($where)
				   ->get()
				   ->result_array();
				   return $rs;
	}
	 public function Getimage($id)
	{
		$rs = $this->db->select('image')
				   ->from('card')
				   ->where(['id'=>$id])
				   ->get()
				   ->result_array();
				   return $rs;
	}
	 public function Getmove($id)
	{
		$rs = $this->db->select('move')
				   ->from('card')
				   ->where(['id'=>$id])
				   ->get()
				   ->result_array();
				   return $rs;
	}
}