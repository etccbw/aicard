<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
use QCloud_WeApp_SDK\Auth\LoginService as LoginService;
use QCloud_WeApp_SDK\Constants as Constants;

class Inspect extends MY_Controller{
		function __construct()
	{
	parent::__construct();
  $this->load->model('api/Minspect','ai');
	}
  public function Inspectcompany()
  {
    $input =  json_decode($this->input->raw_input_stream,TRUE);
    $uid = $this->uid;
    $input['uid'] = $uid;
   	$data = $this->ai->getcompany($input);
   	if(empty($data)){
   		 $this->json([
                    'code' 	=> 1,
                    'data'	=> ""
            ]);
   	}else{
   		 $this->json([
                    'code' 	=> 0,
                    'data'	=>$data
            ]);
   	}
  }
    public function Inspect_card_state()
  {
    $input =  json_decode($this->input->raw_input_stream,TRUE);
    $uid = $this->uid;
    $data = $this->ai->cardstate($uid);
   		 $this->json([
                    'code' 	=> 1,
                    'data'	=>$data
            ]);
  }
    public function Inspect_card_style()
  {
    $input =  json_decode($this->input->raw_input_stream,TRUE);
    $uid = $this->uid;
    $data = $this->ai->card_style($uid);
   		 $this->json([
                    'code' 	=> 1,
                    'data'	=>$data
            ]);
  }
  public function up_card_style()
  {
    $input =  json_decode($this->input->raw_input_stream,TRUE);
    $uid = $this->uid;
    $input['uid'] = $uid;
    $data = $this->ai->up_card_style($input);
   		 $this->json([
                    'code' 	=> 1,
                    'data'	=>$data
            ]);
  }
}


