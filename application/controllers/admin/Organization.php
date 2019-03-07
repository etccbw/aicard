<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
class Organization extends AD_Controller{
	 public function __construct() {
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('admin/Morganization','ao');
   $this->load->model('Enterprise_WeChat/Mdepartment','aw');
    }

    public function nolist()
	{
        $this->load->helper('url');
        $data = $this->element();
        $data['url'] = site_url('admin/organization/getTree');
        $data['item'] = $this->ao->getlist();
    	$this->load->view('admin/organization/organizationlist',$data);
	}

        public function getTree(){
            $res = $this->ao->getTree();
            $data['tree'] = $this->load->view('admin/organization/treetpl',$res, TRUE);
            $data['partment'] = $this->load->view('admin/organization/department',$res, TRUE);
            $this->json([
                'code'=>0,
                'data'=>$data,
            ]);
        }

        public function addDepartment(){
            $input = $this->input->post();
            if(!empty($input['name'])){
                $res = $this->ao->addDepartment();
                if($res){
                    $this->return_ajax([
                    'code'=>'0',
                    'data'=>$res,
                    ]);  
                }else{
                    $this->return_ajax([
                    'code'=>'1',
                    'msg'=>$res,
                    ]);
                }
                exit;
            }
            
            $this->load->helper('url');
            $data['department'] = $this->ao->getDepartment();
            $data['action'] = site_url('admin/organization/addDepartment');
            echo $this->load->view('admin/organization/add_department',$data,true);
        }
        public function addMember(){
            $input = $this->input->post();
            if(!empty($input['username'])){
                $res = $this->ao->addMember();
                if($res){
                    $this->aw->addMember();
                    $this->return_ajax([
                    'code'=>'0',
                    'data'=>$res,
                    ]);  
                }else{
                    $this->return_ajax([
                    'code'=>'1',
                    'msg'=>$res,
                    ]);
                }
                exit;
            }
            $this->load->helper('url');
            $data['department'] = $this->ao->getDepartment();
            $data['action'] = site_url('admin/organization/addMember');

           echo $this->load->view('admin/organization/add_member',$data,true); 
        }
        public function editDepartment(){
            $input = $this->input->post();
            if(!empty($input['name'])){
                $res = $this->ao->editDepartment();
                if($res){
                    $this->return_ajax([
                    'code'=>'0',
                    'data'=>$res,
                    ]);  
                }else{
                    $this->return_ajax([
                    'code'=>'1',
                    'msg'=>$res,
                    ]);
                }
                exit;
            }
            
            $this->load->helper('url');
            $data['department'] = $this->ao->getDepartment();

            $data['action'] = site_url('admin/organization/editDepartment');
            echo $this->load->view('admin/organization/edit_department',$data,true);
        }
        public function editMember(){
            $input = $this->input->post();
            if(!empty($input['username'])){
                $res = $this->ao->editMember();
                if($res){
                    $this->return_ajax([
                    'code'=>'0',
                    'data'=>$res,
                    ]);  
                }else{
                    $this->return_ajax([
                    'code'=>'1',
                    'msg'=>$res,
                    ]);
                }
            }
            $this->load->helper('url');
            $data['member'] = $this->ao->getMember();
            $data['action'] = site_url('admin/organization/editMember');
            echo $this->load->view('admin/organization/edit_member',$data,true); 
        }
        public function delMember(){
            $res = $this->ao->delMember();
            if($res){
                $this->return_ajax([
                'code'=>'0',
                'data'=>$res,
                ]);  
            }else{
                $this->return_ajax([
                'code'=>'1',
                'msg'=>$res,
                ]);
            }
        }
        public function delDepartment(){
            $res = $this->ao->delDepartment();
            if($res){
                $this->return_ajax([
                'code'=>'0',
                'data'=>$res,
                ]);  
            }else{
                $this->return_ajax([
                'code'=>'1',
                'msg'=>'删除失败',
                ]);
            }
        }
}