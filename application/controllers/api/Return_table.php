<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Return_table extends MY_Controller{
  	public function __construct() {
	  parent::__construct();
     }
    public function addtable(){
        $input =  json_decode($this->input->raw_input_stream,TRUE);
        $this->load->model('api/Mreturn_table','mr');
        $uid= $this->uid;
        $input['uid'] = $uid;
        $data = $this->mr->addtable($input);
        $this->json([
                    'code' 	=> 0,
                    'data'	=> $data
            ]);
    }
}
