<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
use QCloud_WeApp_SDK\Auth\LoginService as LoginService;
use QCloud_WeApp_SDK\Constants as Constants;

class Getcard extends MY_Controller{
	function __construct()
	{
	parent::__construct();
	$this->load->model('api/Mgetcard',"ag");
	}
	public function Getcardlist($id)
	{
		$data = $this->ag->Getcardlist($id);
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

	
	public function Getimage($id)
		{
			$data = $this->ag->Getimage($id);
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
	public function Getmove($id)
		{
			$data = $this->ag->Getmove($id);
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