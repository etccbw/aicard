<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
use QCloud_WeApp_SDK\Auth\LoginService as LoginService;
use QCloud_WeApp_SDK\Constants as Constants;

class Product extends MY_Controller{
		function __construct()
	{
	parent::__construct();
  $this->load->model('api/Mproduct','ap');
	}
  public function addproduct()
  {
      $input =  json_decode($this->input->raw_input_stream,TRUE);
      $uid = $this->uid;
      $input['uid'] = $uid;
      $data = $this->ap->addproduct($input);
      $this->json(
        [
          "error"=>"0",
          "data"=>$data,
        ]
      );
  }
    public function upproduct()
  {
      $input =  json_decode($this->input->raw_input_stream,TRUE);
      $uid = $this->uid;
      $input['uid'] = $uid;
      $this->ap->upproduct($input);
      $data = $this->ap->getproduct($input);
      $this->json(
        [
          "error"=>"0",
          "data"=>$data,
        ]
      );
  }
  public function getproduct()
  {
      $input =  json_decode($this->input->raw_input_stream,TRUE);
      $uid = $this->uid;
      $input['uid'] = $uid;
      $data = $this->ap->getproduct($input);
      $this->json(
        [
          "error"=>"0",
          "data"=>$data,
        ]
      );
  }
  public function getproducts()
  {
      $input =  json_decode($this->input->raw_input_stream,TRUE);
      $uid = $this->uid;
      $input['uid'] = $uid;
      $data = $this->ap->getproducts($input);
      $this->json(
        [
          "error"=>"0",
          "data"=>$data,
        ]
      );
  }
  public function delproduct()
  {
      $input =  json_decode($this->input->raw_input_stream,TRUE);
      $uid = $this->uid;
      $input['uid'] = $uid;
      $this->ap->delproduct($input);
      $data = $this->ap->getproduct($input);
      $this->json(
        [
          "error"=>"0",
          "data"=>$data,
        ]
      );
  }
}


