<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
use QCloud_WeApp_SDK\Auth\LoginService as LoginService;
use QCloud_WeApp_SDK\Constants as Constants;
class User extends MY_Controller{
		function __construct()
	{
	parent::__construct();
      $this->load->model('api/Mgetimage','am');
	}
public function Getimage(){
    $uid = $this->uid;
    $data['usercard'] = $this->am->getcode($uid);
    $input['uid'] = $uid;
    $data['image'] = $this->am->codeimage($input);
    $this->json(
      [
        "error"=>"0",
        "data"=>$data,
      ]
    );
  }
 
}


