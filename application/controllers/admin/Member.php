<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
class Member extends AD_Controller{
	 public function __construct() {
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('admin/Mmember','am');
	$this->load->model('admin/Mproduct','ap');
    }
   	public function member($page=0)
	{
		$data = $this->element();
		$this->load->helper('text');
		$this->load->library('pagination');
		$pre_page = 5;
		$pagetotal = $this->am->getAllmember();
		$config['base_url'] = site_url('/admin/product/member');
		$config['total_rows'] = $pagetotal;
		$config['per_page'] = $pre_page;
		$this->pagination->initialize($config);
		$data['paginations'] = $this->pagination->create_links();
		$data['sch'] = $this->input->get('sch');
		$items = $this->am->getlist($pre_page,$page);
		$data['items'] = $items;

		$this->load->view('admin/member/member',$data);
	}
	public function edit()
	{
		$input = $this->input->post();
		$this->return_ajax($this->am->updatecard($input));
	}
	public function del($id)
	{
		$input['id'] = $id;
		$input['card_table'] ="card";
		$this->return_ajax($this->am->delcard($input));	
	}
	public function unaudited_card_del($id)
	{
		$input['id'] = $id;
		$input['card_table'] ="unaudited_card";
		$this->return_ajax($this->am->delcard($input));	
	}
		public function editcard($id)
	{
		$data = $this->element();
		$data['action'] = "/admin/Member/edit";
		$data['items'] = $this->am->editcard($id);
		$data['imagelist'] = $this->am->getAllimagelist($id);
		$data['videolist'] = $this->am->getAllvideolist($id);
		$data['product'] = $this->am->getAllproduct($id);
		$this->load->view('admin/member/member_edit',$data);
	}
	public function  audited($page=0){
		$this->load->helper('text');
		$this->load->library('pagination');
		$pre_page = 5;
		$pagetotal = $this->am->getallaudited();
		$config['base_url'] = site_url('/admin/product/member');
		$config['total_rows'] = $pagetotal;
		$config['per_page'] = $pre_page;
		$this->pagination->initialize($config);
		$data['paginations'] = $this->pagination->create_links();
		$data = $this->element();
		$data['sch'] = $this->input->get('sch');
		$items = $this->am->getaudited($pre_page,$page);
		$data['items'] = $items;
		$this->load->view('admin/member/audited_member',$data);
	}
	public function  is_audited($id){
		$this->return_ajax($this->am->audited_card($id));

	}
	public function  test(){
		$data = $this->element();
		$this->load->view('admin/member/test',$data);
	}
	public function audited_member_edit($id){
		$data = $this->element();
		$data['items'] = $this->am->audited_member_edit($id);
		$data['product'] = $this->am->getAllauproduct($id);
		$this->load->view('admin/member/audited_member_edit',$data);
	}
}