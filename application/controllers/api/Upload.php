<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
use QCloud_WeApp_SDK\Auth\LoginService as LoginService;
use QCloud_WeApp_SDK\Constants as Constants;

class Upload extends MY_Controller{
		function __construct()
	{
	parent::__construct();
  $this->load->model('api/Mupload','am');
	}

//图片文件

   	public function addimage()
	{
		$input =  json_decode($this->input->raw_input_stream,TRUE);
    $uid = $this->uid;
    $input['uid'] = $uid;
    $data = $this->am->addimage($input);
    $this->json(
      [
        "error"=>"0",
        "data"=>$data
      ]
    );
	}
  public function getimage(){
    $input =  json_decode($this->input->raw_input_stream,TRUE);
    $uid = $this->uid;
    $input['uid'] = $uid;
    $data = $this->am->getimage($input);
    $this->json(
      [
        "error"=>"0",
        "data"=>$data
      ]
    );
  }
    public function deimage(){
    $input =  json_decode($this->input->raw_input_stream,TRUE);
    $uid = $this->uid;
    $input['uid'] = $uid;
    $data = $this->am->deimage($input);
    $this->json(
      [
        "error"=>"0",
        "data"=>$data
      ]
    );
  }

//视频文件

   	public function addvideo()
	{
		$input =  json_decode($this->input->raw_input_stream,TRUE);
    $uid = $this->uid;
    $input['uid'] = $uid;
    $data = $this->am->addvideo($input);
    $this->json(
      [
        "error"=>"0",
        "data"=>$data
      ]
    );
	}
  public function getvideo(){
    $input =  json_decode($this->input->raw_input_stream,TRUE);
    $uid = $this->uid;
    $input['uid'] = $uid;
    $data = $this->am->videoget($input);
    $this->json(
      [
        "error"=>"0",
        "data"=>$data
      ]
    );
  }
    public function devideo(){
    $input =  json_decode($this->input->raw_input_stream,TRUE);
    $uid = $this->uid;
    $input['uid'] = $uid;
    $data = $this->am->devideo($input);
    $this->json(
      [
        "error"=>"0",
        "data"=>$data
      ]
    );
  }
}


