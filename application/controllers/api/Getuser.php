<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
use QCloud_WeApp_SDK\Auth\LoginService as LoginService;
use QCloud_WeApp_SDK\Constants as Constants;

class Getuser extends MY_Controller{
		function __construct()
	{
	parent::__construct();
	$this->load->model('api/Musers',"au");
	}
   	public function index()
	{
		}

}