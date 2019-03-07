<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
use QCloud_WeApp_SDK\Auth\LoginService as LoginService;
use QCloud_WeApp_SDK\Constants as Constants;

class Card extends MY_Controller{
		function __construct()
	{
	parent::__construct();
  $this->load->model('api/Mcard','ac');
  $this->load->model('api/mcollect','al');
  $this->load->model('api/Mgetimage','am');
	}
  public function addcard()
  {
      $input =  json_decode($this->input->raw_input_stream,TRUE);
      $uid = $this->uid;
      $input['uid'] = $uid;
      $data = $this->ac->newcard($input);
      $this->json(
        [
          "code"=>"0",
          "data"=>$data,
        ]
      );
  }
  public function updatecard()
  {
      $input =  json_decode($this->input->raw_input_stream,TRUE);
      $uid = $this->uid;
      $input['uid'] = $uid;
      $data = $this->ac->updatecard($input);
      $this->json(
        [
          "code"=>"0",
          "data"=>$data,
        ]
      );
  }
  public function cardlist()
  {
      $uid = $this->uid;
      $data = $this->ac->cardlist($uid);
      $this->json(
              [
                "code"=>"0",
                "data"=>$data,
              ]
            );
  }
  public function getcard()
  {
      $input =  json_decode($this->input->raw_input_stream,TRUE);
      $uid = $this->uid;
      $input['uid'] = $uid;
      $data = $this->ac->getcard($input);
      $this->load->model('api/Mgetimage','am');
      $data['qrcode'] = $this->am->codeimage($input);
      $this->json(
              [
                "code"=>"0",
                "data"=>$data,
              ]
            );
  }
  public function delcard()
  {
      $input =  json_decode($this->input->raw_input_stream,TRUE);
      $uid = $this->uid;
      $input['uid'] = $uid;
      $data = $this->ac->delcard($input);
      $this->json(
        [
          "code"=>"0",
          "data"=>$data,
        ]
      );
  }
   public function searchcard()
  {
      $input =  json_decode($this->input->raw_input_stream,TRUE);
      $uid = $this->uid;
      $input['uid'] = $uid;
      $data = $this->ac->searchcard($input);
      $this->json(
        [
          "code"=>"0",
          "data"=>$data,
        ]
      );
  }
  public function getunauditedcard()
    {
        $input =  json_decode($this->input->raw_input_stream,TRUE);
        $uid = $this->uid;
        $input['uid'] = $uid;
        $data = $this->ac->getunauditedcard($input);
        $this->load->model('api/Mgetimage','am');
        $data['qrcode'] = $this->am->codeimage($input);
        $this->json(
                [
                  "code"=>"0",
                  "data"=>$data,
                ]
              );
    }
    public function getdetails()
    {
      $uid = $this->uid;
      $rs =  $this->ac->getdetails();
      if($rs == 1){
        $input['uid'] = $uid;
         $data =  $this->ac->getcard($input);
         $data['qrcode'] = $this->am->codeimage($input);
      }else{
         $input['uid'] = $uid;
        $data = $this->ac->getunauditedcard($input);
        $data['qrcode'] = $this->am->codeimage($input);
      }
      $this->json(
                [
                  "code"=>"0",
                  "data"=>$data,
                ]
              );
    }
}


