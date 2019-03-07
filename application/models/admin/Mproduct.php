<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mproduct extends CI_Model{
	public function getlist($limit=20,$offset=0){
		$this->load->database();
		$input = $this->input->get();
		if(isset($input['sch'])){
			 $like = [
                'u.username'   => $input['sch'],
                ];
            $rs = $this->db->select('p.*,u.username')
					->from('product as p')
					->join('card as u','p.uid=u.uid')
					->where('p.is_del',0)
					->limit($limit,$offset)
					->or_like($like)
					->get()
					->result_array();    
         }else{
         	$rs = $this->db->select('p.*,u.username')
					->from('product as p')
					->join('card as u','p.uid=u.uid')
					->where('p.is_del',0)
					->limit($limit,$offset)
					->get()
					->result_array();    
         }
		
		$image_url = "";
		foreach ($rs as $key => $value) {
			$image_url[] = $value['image'];
		}
		  $images = implode(",",$image_url);
	      $image = explode(',',$images);
	      $imagesid = array_unique($image);
		  $productimage = $this->db->select('id,image')
	                          ->from('userimage')
	                          ->where_in('id',$imagesid)
	                          ->where(['is_del'=>0])
	                          ->get()
	                          ->result_array();
	      foreach($productimage as $k=>$v)
	      {
	      	if($v['image']){
	      		$newimages [$v['id']]= $v['image'];	
	      	}
	      }
	      $ret = array_map(function($item) use($newimages) 
	      {
	        $imagesIds = explode(',', $item['image']);

	        $imageLists = [];
	          foreach($imagesIds as $k=>$val)
	          {
	          	if(!empty($newimages[$val])){
	      		$imageLists[$val] = $newimages[$val];
	      		}
	          }
	        $item['image'] = $imageLists;
	        return $item;
	      }, $rs);
		return $ret;
	}
	public function imagelist($limit=20,$offset=0){
		$this->load->database();
		$rs = $this->db->select('i.id,i.uid,i.image,u.username')
					->from('userimage as i')
					->join('card as u','i.uid = u.uid')
					->where('i.is_del',0)
					->get()
					->result_array();
		$list = [];
		foreach ($rs as $item){
		    if(array_key_exists($item['uid'], $list)){
		        $list[$item['uid']]['image'][] = $item['image'];
		    }else{
		        $list[$item['uid']] = [
		            'uid'    => $item['uid'],
		            'username'  => $item['username'],
		            'image' => [$item['image']]
		        ];
		    }
		}
		$list = array_slice($list,$limit*$offset,$limit);
		return $list;
	}
	public function imageedit($uid){
		$this->load->database();
		$rs = $this->db->select('id,image')
					->from('userimage')
					->where('uid',$uid)
					->get()
					->result_array();
	return $rs;
	}
	public function videolist($limit=20,$offset=0){
		$this->load->database();
		$rs = $this->db->select('v.*,u.username')
					->from('uservideo as v')
					->join('card as u','v.uid=u.uid')
					->where('v.is_del',0)
					->get()
					->result_array();
		$list = [];
		foreach ($rs as $item){
		    if(array_key_exists($item['uid'], $list)){
		        $list[$item['uid']]['video'][] = $item['video'];
		    }else{
		        $list[$item['uid']] = [
		            'uid'    => $item['uid'],
		            'username'  => $item['username'],
		            'video' => [$item['video']]
		        ];
		    }
		}
		$list = array_slice($list,$limit*$offset,$limit);
		return $list;
	}
	function getAllimagelist(){
		$this->load->database();
		$rs = $this->db->select('count(id) as conid')
					->from('userimage')
					->where('is_del',0)
					->group_by('uid')
					->get()
					->row_array();
		return count($rs);
	}
	function getAllvideolist(){
		$this->load->database();
		$rs = $this->db->select('count(id) as conid')
					->from('uservideo')
					->where('is_del',0)
					->group_by('uid')
					->get()
					->row_array();
		return count($rs);
	}
	function getAllproduct(){
		$this->load->database();
		$rs = $this->db->select('count(id) as conid')
					->from('product')
					->where('is_del',0)
					->get()
					->row_array();
		return $rs['conid'];
	}

	public function delvideo($input){
		$imgid = explode(",", $input['videoid']); 
		$data = Array();
		    foreach ($imgid as $key => $value) 
		    {
		      $data[]=Array('id'=>$value,'is_del'=>1);
		    }
		return $this->db->update_batch('uservideo',$data,'id');
	}

	public function delimage($input){
		$imgid = explode(",", $input['imgid']); 
		$data = Array();
		    foreach ($imgid as $key => $value) 
		    {
		      $data[]=Array('id'=>$value,'is_del'=>1);
		    }
		return $this->db->update_batch('userimage',$data,'id');
	}
	public function getproduct($id){
		$where = [
			'p.id'=>$id,
		];
		$rs = $this->db->select('p.*,c.username')
					->from('product as p')
					->join('card as c','c.uid=p.uid')
					->where($where)
					->get()
					->row_array();
		$where_in = explode(",", $rs['image']);
    	$rs['image'] = $this->db->select("id,image")
                      ->from('userimage')
                      ->where_in('id',$where_in)
                      ->where('is_del',0)
                      ->get()
                      ->result_array();
		return $rs;
	}
	public function editproduct($input){
		$where = [
			'id'=>$input['id']
		];
		$data = [
			'title'=>$input['title'],
			'image'=>$input['image'],
			'content'=>$input['content'],
		];
		$rs = $this->db->update('product',$data,$where);
		return $rs;
	}
	public function productdel($id){
		return $this->db->update('product',['is_del'=>1],['id'=>$id]);

	}
	public function getuidimage($input){
		$where = [
			'is_del'=>0,
			'uid'   =>$input['uid']
		];
		$data['imagebox'] = $this->db->select('id,image')
					->from('userimage')
					->where($where)
					->get()
					->result_array();
		return $data;
	}
	public function getuidvideo($input){
		$where = [
			'is_del'=>0,
			'uid'   =>$input['uid']
		];
		$data['videobox'] = $this->db->select('id,video')
					->from('uservideo')
					->where($where)
					->get()
					->result_array();
		return $data;
	}
	public function is_audited($id){
		$input = $this->input->post();
		$data = [
			'is_audited'=>1
		];
		$rs = $this->db->update('product',$data,['id'=>$id]);
	return $rs;
	}
}