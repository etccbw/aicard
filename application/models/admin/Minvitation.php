<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Minvitation extends CI_Model{
	public function __construct() {
		parent::__construct();
		$this->load->database();
    }
    public function get_list($limit=20,$offset=0){
	    $rs =  $this->db->select('c.username as uname ,i.*')
			    			->from('invitation as i')
			    			->join('card as c', 'c.uid = i.uid')
			    			->limit($limit,$offset)
			    			->get()
			    			->result_array();
	        return $rs;   
    }
    public function get_list_count(){
	    $rs = $this->db->select('count(id) as conid')
	          ->from('invitation')
	          ->get()
	          ->row_array();
	    	return $rs['conid']; 
    }
}
