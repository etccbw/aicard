<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mfileimage extends CI_Model{
	public function __construct() {
		parent::__construct();
		$this->load->database();
    }
    function getimagelist(){
    	$rs = $this->db->select('id,image')
					->from('userimage')
					->get()
					->result_array();
		return $rs;

    }
}	      