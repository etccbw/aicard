<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collect extends MY_Controller{
  	public function __construct() {
	  parent::__construct();
     }
    public function track(){
        $this->load->model('api/Mcollect','mc');
        $data = $this->mc->track($this);
        $this->json([
                    'code' 	=> 0,
                    'data'	=> $data
            ]);
    }
    public function getTrack(){
            $input =  json_decode($this->input->raw_input_stream,TRUE);
            $uid = $this->uid;
            $input['uid'] = $uid;
            $this->load->model('api/Mcollect','mc');
            $res = $this->mc->getTrack($uid);
            $this->json([
                    'code' 	=> 0,
                    'data'	=> $res
            ]);
    }
                    
}
