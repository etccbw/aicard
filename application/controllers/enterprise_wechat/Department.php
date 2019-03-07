<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller{
  	public function __construct() {
	  parent::__construct();
       $this->load->model('Enterprise_WeChat/Mdepartment','mp');
     }
    public function department_list(){
        $data = $this->mp->department_list();
        $this->json([
                    'code' 	=> 0,
                    'data'	=> $data
            ]);
    }
}
