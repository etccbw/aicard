<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
use QCloud_WeApp_SDK\Auth\LoginService as LoginService;
use QCloud_WeApp_SDK\Constants as Constants;

class Getproduct extends MY_Controller{
		function __construct()
	{
	parent::__construct();
	$this->load->model('api/Mproduct',"p");
	}
   	public function index()
	{
		$data = $this->au->getusers();
			if(empty($data)){
			$this->json(
					[
						'code'=>'1',
						'msg' =>'fail',
						'data'=>'',
					]
				);
			}else{
			$this->json(
					[
						'code'=>'0',
						'msg' =>$data,
						'data'=>'success',
					]
				);
			}
	}

}