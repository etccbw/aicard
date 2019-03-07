<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Musers extends CI_Model{
	public function getusers()
	{
		 $this->load->database();
		 $rs = $this->db->select('*')
				   ->from('user')
				   ->get()
				   ->result_array();
		return $rs;
	}
}