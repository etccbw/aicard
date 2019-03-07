<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
class Product extends AD_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin/Mproduct','ap');
    }
   	public function productlist()
	{
	$data = $this->element();
	$this->load->helper('text');
	$this->load->library('pagination');
	$pre_page = 5;
	$pagetotal = $this->ap->getAllproduct();
	$config['base_url'] = site_url('/admin/product/productlist');
	$config['total_rows'] = $pagetotal;
	$config['per_page'] = $pre_page;
	$this->pagination->initialize($config);
	$data['paginations'] = $this->pagination->create_links();
	$input = $this->input->get();
		if(!empty($input['per_page'])){
			$page = ($input['per_page']-1)*5;
		}else{
			$page = 0;
		}
	$data['sch'] = "";
	$data['sch'] = $this->input->get('sch');
	$data['items'] = $this->ap->getlist($pre_page,$page);
	$this->load->view('admin/product/product',$data);
	}
	public function productedit($id)
	{
		$data = $this->element();
		$data['action'] = "/admin/product/editproduct";
		$data['items'] = $this->ap->getproduct($id);
		$input['uid'] = $data['items']['uid'];
		$data['imagelist'] = $this->ap->getuidimage($input);
		$this->load->view('admin/product/product_edit',$data);
	}
	public function productdel($id)
	{
		$this->return_ajax($this->ap->productdel($id));
	}
	public function editproduct()
	{
		$input = $this->input->post();
		$this->return_ajax($this->ap->editproduct($input));	
	}
	public function imagelist($page=0)
	{
	$data = $this->element();
	$this->load->helper('text');
	$this->load->library('pagination');
	$pre_page = 5;
	$pagetotal = $this->ap->getAllimagelist();
	$config['base_url'] = site_url('/admin/product/imagelist');
	$config['total_rows'] = $pagetotal;
	$config['per_page'] = $pre_page;
	$this->pagination->initialize($config);
	$data['paginations'] = $this->pagination->create_links();
	$data['items'] = $this->ap->imagelist($pre_page,$page);

	$data['url'] = site_url('admin/product/allimage');
	
	$this->load->view('admin/product/imagelist',$data);
	}
	public function imageedit($uid){
		$data['items'] = $this->ap->imageedit($uid);
		$this->load->view('admin/product/image_edit',$data);	
	}
	public function videolist($page=0)
	{
		$data = $this->element();
		$this->load->helper('text');
		$this->load->library('pagination');
		$pre_page = 5;
		$pagetotal = $this->ap->getAllvideolist();
		$config['base_url'] = site_url('/admin/product/videolist');
		$config['total_rows'] = $pagetotal;
		$config['per_page'] = $pre_page;
		$this->pagination->initialize($config);
		$data['paginations'] = $this->pagination->create_links();

		$data['url'] = site_url('admin/product/allvideo');

		$data['items'] = $this->ap->videolist($pre_page,$page);
		$this->load->view('admin/product/videolist',$data);
	}
	public function videoedit($uid)
	{	
		$data['items'] = $this->ap->videoedit($uid);
		$this->load->view('admin/product/video_edit',$data);
	}
		public function allimage()
	{
		$input = $this->input->post();
		$res = $this->ap->getuidimage($input);
		$data['imagebox'] = $this->load->view('admin/product/image_edit',$res, TRUE);
		$this->json([
            'code'=>0,
            'data'=>$data,
        ]);
	}
	public function allvideo()
	{
		$input = $this->input->post();
		$res = $this->ap->getuidvideo($input);
		$data['videobox'] = $this->load->view('admin/product/video_edit',$res, TRUE);
		$this->json([
            'code'=>0,
            'data'=>$data,
        ]);
	}
	public function delimage()
	{
		$input = $this->input->post();
		$this->return_ajax($this->ap->delimage($input));
	}
	public function delvideo()
	{
	   $input = $this->input->post();
	   $this->return_ajax($this->ap->delvideo($input));
	}
	public function is_audited($id){
		$this->return_ajax($this->ap->is_audited($id));
	}
}