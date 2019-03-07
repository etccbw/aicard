<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mcollect extends CI_Model{
	public function __construct() {
		parent::__construct();
		$this->load->database();
    }
	public function collectlist(){
		$rs = $this->db->select('id,comment,name')
					->from('modules')
					->get()	
					->result_array();
		return $rs; 
	}
	public function collectitems(){
		$input = $this->input->get();
		if(isset($input['sch'])){
			 $like = [
                'u.username'   => $input['sch'],
                ];
			$rs = $this->db->select('u.username,u.id,m.name,COUNT(l.mid) as total')
					->from('card as u')
					->join('log as l','u.id=l.target_uid')
					->join('modules as m','m.id=l.mid')
					->group_start()
	                ->or_like($like)
	                ->group_end()
					->group_by('l.mid,u.username,u.id,m.name')
					->order_by('m.id','asc')
					->get()
					->result_array();
		}else{
			$rs = $this->db->select('u.username,u.id,m.name,COUNT(l.mid) as total')
					->from('card as u')
					->join('log as l','u.id=l.target_uid')
					->join('modules as m','m.id=l.mid')
					->group_by('l.mid,u.username,u.id,m.name')
					->order_by('m.id','asc')
					->get()
					->result_array();
		}
		$arr = [];
		$copy= $rs;
		foreach ($rs as $key => $val) {
			foreach ($copy as $k => $v) {
				if($val['username'] == $v['username']){
					$arr[$val['username']][$v['name']] = $v['total'];
					$arr[$val['username']]['id'] = $v['id']; 
				}
			}
		}
		return $arr;
	}
	public function getallitems(){
		$input = $this->input->get();
		if(isset($input['sch'])){
			 $like = [
                'u.username'   => $input['sch'],
                ];
			$rs = $this->db->select('u.username,u.id,m.name,COUNT(l.mid) as total')
					->from('card as u')
					->join('log as l','u.id=l.target_uid')
					->join('modules as m','m.id=l.mid')
					->group_start()
	                ->or_like($like)
	                ->group_end()
					->group_by('l.mid,u.username,u.id,m.name')
					->order_by('m.id','asc')
					->get()
					->result_array();
		}else{
			$rs = $this->db->select('u.username,u.id,m.name,COUNT(l.mid) as total')
					->from('card as u')
					->join('log as l','u.id=l.target_uid')
					->join('modules as m','m.id=l.mid')
					->group_by('l.mid,u.username,u.id,m.name')
					->order_by('m.id','asc')
					->get()
					->result_array();
		}
		$arr = [];
		$copy= $rs;
		foreach ($rs as $key => $val) {
			foreach ($copy as $k => $v) {
				if($val['username'] == $v['username']){
					$arr[$val['username']][$v['name']] = $v['total'];
					$arr[$val['username']]['id'] = $v['id']; 
				}
			}
		}
		$items_count = count($arr);
		return $items_count;
	}
	public function getuserlist($input,$limit=20,$offset=0){
		$mid = $input['m'];
		$uid = $input['id'];
		$where = [
			'l.mid'        =>$mid,
			'l.target_uid' =>$uid
		];
			$rs = $this->db->select('u.username as uname,m.comment,l.target,l.uid as pname,l.opentime')
							->from('log as l')
							->join('card as u','u.id=l.target_uid','u.id=l.uid')
							->join('modules as m','m.id=l.mid','l.uid=u.id')
							->where($where)
							->limit($limit,$offset)
							->get()
							->result_array();
			$pname = [];
			foreach ($rs as $key => $value) {
				$pname[] = $value['pname'];
			}
			if(empty($pname)){return ;}
			$data = $this->db->select('username,id')
							->from('card')
							->where_in('id',$pname)
							->get()
							->result_array();
			$name_id = [];
			foreach ($data as $key => $value) {
				$name_id[$value['id']] = $value['username'];
			}
			$ret = array_map(function($item) use($name_id) {
				$imagesIds = explode(',', $item['pname']);
				$imageLists = [];
				foreach($imagesIds as $val){
					$imageLists[] = $name_id[$val]; 
				}
				$item['pname'] = $imageLists[0];
				return $item;
			}, $rs);
			return $ret;
	}
	public function getAlluserlist($input){
		$mid = $input['m'];
		$uid = $input['id'];
		$where = [
			'l.mid'        =>$mid,
			'l.target_uid' =>$uid
		];
			$rs = $this->db->select('count(l.id) as conid')
							->from('log as l')
							->join('card as u','u.id=l.target_uid','u.id=l.uid')
							->join('modules as m','m.id=l.mid','l.uid=u.id')
							->where($where)
							->get()
							->row_array();
		return $rs['conid'];	
	}
}
