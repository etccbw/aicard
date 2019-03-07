<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Madminlogin extends CI_Model{
    public function __construct() {
	parent::__construct();
    }
    public function getAdminUserStore($store_id=false){
	$where = [
	    'b.is_del'=>'0',
	]; 
	
	if($this->admininfo['role_id'] != 1){
	   $where['ab.admin_id'] = $this->admininfo['admin_id'];
	}
	if($store_id){
	    $where['b.shop_id']=$store_id;
	}
	if($this->admininfo['role_id'] == 1){
	$admin_branch = $this->db
		->select('b.*')
		->from('branch as b')
		->where($where)
		->get()
		->result_array(); 
	}else{
	$admin_branch = $this->db
		->select('ab.*,b.shop_name')
		->from('branch as b')
		->join('admin_branch as ab','ab.shop_id = b.shop_id','left')
		->where($where)
		->get()
		->result_array();
	}
	if($admin_branch){
	    
	    return $admin_branch;
	    
	} else {
	    return FALSE;
	}	
    }
    public function switchStore($store_id){
	$this->load->library('session');
	if($store_id !='all'){
	   $rs = $this->getAdminUserStore($store_id);
	}
	if($store_id =='all'){
	   $rs = $this->getAdminUserStore();
	}

	if($rs){
	    $this->session->unset_userdata('storeinfo');
	    $this->session->set_userdata('storeinfo',$rs);
	    return TRUE;
	} else {
	    return FALSE;
	}
    }
    public function getAdminDefaultStore(){
	$where = [
	    'b.default'=>'1',
	    'b.is_del'	=> "0",
	];
	if($this->admininfo['role_id'] != 1){
	    $where['ab.admin_id'] = $this->admininfo['admin_id'];
	}

	$admin_branch = $this->db
		->select('b.shop_name,ab.admin_id,b.shop_id')
		->from('admin_branch as ab')
		->join('branch as b','ab.shop_id = b.shop_id','left')
		->where($where)
		->limit(1)
		->get()
		->result_array();

	if($admin_branch){
	    $this->session->unset_userdata('storeinfo');
	    $this->session->set_userdata('storeinfo',$admin_branch);
	    return $admin_branch;
	} else {
	    return FALSE;
	}
    }
    public function getTotalTurnover(){
	//$shop_id = $this->in;
	$branch = $this->getAdminUserStore();
	foreach ($branch as $v){
	    $in_branch[] = $v['shop_id'];
	}
	$rs = $this->db->select("sum(order_amount) as total")
		->from('order')
		//->join('order_items as oi','oi.order_id = o.order_id','left');
		->where(['pay_code !='=>'','pay_status'=>'1','pay_time !='=>'0'])
		->where_in('shop_id',$in_branch)
		->get()
		->result_array();
	return $rs[0];
    }
    public function getCurrentDayTotalTurnover(){
	//$shop_id = $this->in;
	$branch = $this->getAdminUserStore();
	foreach ($branch as $v){
	    $in_branch[] = $v['shop_id'];
	}
	//凌晨
	$start = date('Ymd');
	$end	= date('Ymd',strtotime('+1 day'));
	$rs = $this->db->select("sum(order_amount) as total")
		->from('order')
		//->join('order_items as oi','oi.order_id = o.order_id','left');
		->where(['pay_code !='=>'','pay_status'=>'1','pay_time !='=>'0','pay_time >='=>$start,'pay_time <='=>$end])
		->where_in('shop_id',$in_branch)
		->get()
		->result_array();
	return $rs[0];
    }
    public function getTotalAvailableBalance(){
	//$shop_id = $this->in;
	$branch = $this->getAdminUserStore();
	foreach ($branch as $v){
	    $in_branch[] = $v['shop_id'];
	}
	$rs = $this->db->select("sum(o.available_balance) as total")
		->from('order o')
		//->join('order_items as oi','oi.order_id = o.order_id','left')
		->where(['o.pay_code !='=>'','o.pay_status'=>'1','o.pay_time !='=>'0'])
		->where_in('o.shop_id',$in_branch)
		->get()
		->result_array();
	return $rs[0]['total']?$rs[0]['total']:"0.00";
    }
}