<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use QCloud_WeApp_SDK\Model\User;
use QCloud_WeApp_SDK\Auth\LoginService as LoginService;
use QCloud_WeApp_SDK\Constants as Constants;
use \QCloud_WeApp_SDK\Helper\Util as Util;
use QCloud_WeApp_SDK\Auth\AuthAPI;

class MY_Controller extends CI_Controller{
    public $result;
    public $open_id;
    public $uid;
    public $userinfo;
    public function __construct() {
        parent::__construct();
        $result = AuthAPI::checkLogin(Util::getHttpHeader('x-wx-skey'));
        $this->result = $result;
        $result['test'] = json_decode($this->input->raw_input_stream,TRUE);
        if ($result['loginState'] !== Constants::S_AUTH) {
            $data = [
                'code'=>4001,
                'error'=>"Be overdue"
              ];
            $this->json($data);
            }
        $userinfo = $result['userinfo'];
        $this->userinfo = $userinfo;
        $this->load->model('api/Muid','ad');
        $uid = $this->ad->getuid($userinfo);
        $this->uid = $uid['id'];    
    }
}
class AD_Controller extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('admin/Madmin','ma');
            if(!$this->ma->admininfo){
            $this->load->helper('url');
            redirect('/admin/Login/index');
        }
       
     }
     public function element(){
        $element['admininfo'] = $this->ma->admininfo;
        $element['storeinfo'] = $this->session->storeinfo;
        $data['header'] = $this->load->view('common/header','',true);
        $data['admininfo'] = $element['admininfo'];
        $data['top'] = $this->load->view('common/top',$data,true);
        $data['footer_js']  = $this->load->view('common/footer','',true);
        $data['left_nav'] = $this->load->view('common/left_nav','',true);
        $data['style'] = $this->load->view('common/style','',true);
        return $data;
     }
     public function return_ajax($data) {
        $this->output
        ->set_content_type('application/json','utf-8');
        $this->output
            ->set_output(json_encode($data))
            ->_display();
        exit;
    }
}