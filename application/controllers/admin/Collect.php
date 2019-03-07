<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
class Collect extends AD_Controller{
	 public function __construct() {
	parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin/Mcollect','al');
    }
   	public function collectlist($page=1)
	{
		$data = $this->element();
		$this->load->helper('text');
		$this->load->library('pagination');
		$pre_page = 10;
		$pagetotal = $this->al->getallitems();
		$paginationurl ="/admin/Collect/collectlist";
		$config['base_url'] = site_url($paginationurl );
		$config['total_rows'] = $pagetotal;
		$config['per_page'] = $pre_page;
		$this->pagination->initialize($config);
		$data['paginations'] = $this->pagination->create_links();
		$data['comment'] = $this->al->collectlist();
		$page = ($page-1)*10;
		$data['items'] = $this->al->collectitems($pre_page,$page);
	    $data['sch'] = "";
	    $data['sch'] = $this->input->get('sch');
		$data['action'] = "admin/Collect/collectlist";
		$this->load->view('admin/collect/collectlist',$data);
	}
	public function getuserlist($m=0,$id=0,$per_page=0){
		$data = $this->element();
		$input = $this->input->get();
		$this->load->helper('text');
		$this->load->library('pagination');
		$pre_page = 10;
		$pagetotal = $this->al->getAlluserlist($input);
		$m = $input['m'];
		$id = $input['id'];
		if(empty($input['per_page'])){
			$page = 1;
		}else{
			$page = $input['per_page'];
		}
		$paginationurl ="/admin/Collect/getuserlist?m=$m&id=$id";
		$config['base_url'] = site_url($paginationurl );
		$config['total_rows'] = $pagetotal;
		$config['per_page'] = $pre_page;
		$this->pagination->initialize($config);
		$data['paginations'] = $this->pagination->create_links();
		$data['comment'] = $this->al->collectlist();
		$page = ($page-1)*10;
		$data['items'] = $this->al->getuserlist($input,$pre_page,$page);
		$this->load->view('admin/collect/getuserlist',$data);

	}
}
