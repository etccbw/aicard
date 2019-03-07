<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
use QCloud_WeApp_SDK\Auth\LoginService as LoginService;
use QCloud_WeApp_SDK\Constants as Constants;

class Login extends MY_Controller{
		function __construct()
	{
	parent::__construct();
	}
   	public function savecard()
	{
      $input =  json_decode($this->input->raw_input_stream,TRUE);
      $data = array_key_exists('car_id',$input);
      if($data){
        $this->load->model('api/Mlogin','m');
        $res = $this->m->addusers($input);
      }
      $this->json(
        [
          "error"=>"0",
          "data"=>$data
        ]
      );
    }
    public function getusers()
	{
     $input =  json_decode($this->input->raw_input_stream,TRUE);
      $uid = $this->uid;
      $input['uid'] = $uid;
      $this->load->model('api/Mlogin','m');
      $data = $this->m->getusers($input);
      if($data['code'] == '1'){
      $this->json(
          [
            'code'=>'1',
            'msg' =>$data['msg'],
            'data'=>'',
          ]
        );
      }else{
      $this->json(
          [
            'code'=>'0',
            'msg' =>'success',
            'data'=>$data['data'],
          ]
        );
      }
	}
  public function delusers(){
      $input =  json_decode($this->input->raw_input_stream,TRUE);
      $uid = $this->uid;
      $input['uid'] = $uid;
      $this->load->model('api/Mlogin','m');
      $data = $this->m->delusers($input);
      $this->json(
        [
          "error"=>"0",
          "data"=>$data
        ]
    );
  }
  public function getuser(){
      $input =  json_decode($this->input->raw_input_stream,TRUE);
      $this->load->model('api/Mlogin','m');
      $this->load->model('api/Mcard','ac');
      $this->load->model('api/Mgetimage','am');
      $data = $this->ac->getcard($input);
      $data['qrcode'] = $this->am->codeimage($input);
      $this->json(
        [ 
          "error"=>"0",
          "data"=>$data
        ]
    );
  }
    public function users($input)
    {
      $this->load->model('api/Mlogin','m');
      $res = $this->m->addusers($input);
      if(!empty($res)){
        $this->load->model('api/Mcollect','al');
        $input['mname'] = "received_card";
        $input['target_uid'] = $input['car_id'];
        return $this->al->savecard($input);
      }
    }
}


