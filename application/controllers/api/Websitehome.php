<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
use QCloud_WeApp_SDK\Auth\LoginService as LoginService;
use QCloud_WeApp_SDK\Constants as Constants;

class Websitehome extends CI_Controller {
    public function __construct() {
	parent::__construct();

	$this->load->helper('url');
        $this->load->database();
	//$this->load->model('admin/foods/Foodmaterial','fm');
	//$this->load->model('Mproduct','p');
    }
    public function getweb(){
    		$db = $this->load->database();
		$allarr = $this->db->order_by('sort')->where(array('delete'=>null))->get('page_show')->result_array();
		if(empty($allarr)){
		$data['set'] = $this->load->view('setno','',true);
		$data['mod'] = $this->load->view('modno','',true);
	    }else{
	    	$data['tarr']=array();
	     foreach ($allarr as $k => $v) {
	     $data['newsin'] = array();
	     $data['mg'] = array();
	     $data['tvin'] = array();
          $data['divid'] = $v['divid'];
          $data['engdt'] = $v['engdt'];
          if($v['engdt']=='companynews'){
	      $data['news'] = $this->db->where('divid',$v['divid'])->get('companynews')->row_array();
             if($data['news']){
             	$newid = explode(",", $data['news']['newid']);
             	foreach ($newid as $m) {
	             $data['newsin'][] = $this->db->where('id',$m)->get('companynewsinfo')->row_array();	
             	}
             }
          }elseif($v['engdt']=='companyintv'){
          	 $data['tv'] = $this->db->where('divid',$v['divid'])->get('companyintv')->row_array();
             if($data['tv']){
             	$newid = explode(",", $data['tv']['intvid']);
             	foreach ($newid as $m) {
	             $data['tvin'][] = $this->db->where('id',$m)->get('companyintvinfo')->row_array();	
             	}
             }
          }elseif($v['engdt']=='companymage'){
          	 $data['mage'] = $this->db->where('divid',$v['divid'])->get('companymage')->row_array();
             if($data['mage']){
             	$mageid = explode(",", $data['mage']['mageid']);
             	foreach ($mageid as $m) {
	             $data['mg'][] = $this->db->where('id',$m)->get('companymageinfo')->row_array();	
             	}
             }
          }
	      $data['teaminfo'] = $this->db->where('divid',$v['divid'])->get('companyteaminfo')->result_array();
          $data['mod_info'] = $this->db->where('divid',$v['divid'])->get($v['engdt'])->row_array();
          $data['mod'] =$this->load->view('mod'.substr($v['divid'],0,strpos($v['divid'], '-')),$data,true);
          $data['temp'] = $this->load->view("template",$data,true);
          array_push($data['tarr'],$data['temp']);
	     }
	    $data['mageinfo'] = $this->db->where(array('del'=>null))->get('companymageinfo')->result_array();
	    $data['newsinfo'] = $this->db->where(array('del'=>null))->get('companynewsinfo')->result_array();
	    $data['tvinfo'] = $this->db->where(array('del'=>null))->get('companyintvinfo')->result_array();
	    $data['sarr'] = array_shift($allarr);//获取第一条数据
	    $data['dt'] = substr($data['sarr']['divid'],0,strpos($data['sarr']['divid'], '-'));
	    $data['sid'] = $data['sarr']['divid'];
	    $data['set_info'] = $this->db->where('divid',$data['sarr']['divid'])->get($data['sarr']['engdt'])->row_array();
	    $data['set_info']['setdt'] = substr($data['sarr']['divid'],0,strpos($data['sarr']['divid'], '-'));
	    $data['set'] = $this->load->view("set".$data['set_info']['setdt'],$data,true);
	    }
		$this->load->view('Websitehome',$data);
  }
}