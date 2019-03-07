<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mlogin extends CI_Model{
		function __construct()
	{
    parent::__construct();
		$this->load->database();
	}
  function addusers($input)
  {
    $mid = $this->uid;
    $car_id = $input['car_id'];
    $uid = $this->getuseruid($car_id);
    $data = array
    (
     'mid'=>$mid,
     'car_id'=>$uid,
     'is_del'=>0
    );
    $result = $this->db->select('id')
              ->from('users')
              ->where($data)
              ->get()
              ->row_array();
    if(!$result){
      return $this->db->insert('users',$data);
    }
  }
  function getuseruid($car_id){
    $rs = $this->db->select('uid')
                  ->from('card')
                  ->where('id',$car_id)
                  ->get()
                  ->row_array();
   return $rs['uid'];
  }
   function getusers($input)
  {
    $mid = $input['uid'];
    $data = $this->db->select('car_id')
            ->from('users')
            ->where(['mid'=>$mid,'is_del'=>0])
            ->get()
            ->result_array();
    if(empty($data)){   
       return [
        'code'=>"0",
        'data' => $data
      ];}
    $where_in = array();
		foreach ($data as $key => $value) {
			$where_in[] =$value['car_id'];
		}
    $where = [
		'is_del'=>0,
		'is_found'=>1
	  ];
    $rs = $this->db->select('id,uid,username,avatar,company,duties,tel,email,address')
                  ->from('card')
				          ->where($where)
                  ->where_in('uid',$where_in)
                  ->get()
                  ->result_array();
    $ret = $this->db->error();
    if(!$ret['code']==0){
      return [
        'code'=>"1",
        'msg' => $ret['message']
      ];
    }else{
      return [
        'code'=>"0",
        'data' => $rs
      ];
    }
  }    
  function delusers($input)
  {
    $mid = $input['uid'];
    $car_id = $input['car_id'];
    $data = array
    (
     'is_del'=>1,
    );
    $this->db->update('users',$data,['car_id'=>$car_id]);
    $rs = $this->getusers($input);
    return $rs;
   }


  function getuser($input)
  {
    $id = $input['car_id'];
       $where = [
      'uid'  =>$id,
    ];
    $rs = $this->db->select("*")
                   ->from("$card")
                   ->where($where)
                   ->get()
                   ->row_array();
    $rs['company_info'] = $this->db->select('company,address,website,company_login')
                  ->from('company')
                  ->where('id',$rs['company_id'])
                  ->get()
                  ->row_array();
     $rs['login'] = $this->db->select("login")
                   ->from("cm_card_style")
                   ->where('card_style',$rs['card_style'])
                   ->get()
                   ->row_array();
     $where_in = explode(",", $rs['product']);
     $product_where = [
       'is_del'=>0,
       'is_audited'=>1
     ];
     $rs['product'] = $this->db->select("id,image,title,content")
                              ->from('product')
                              ->where_in('id',$where_in)
                              ->where($product_where)
                              ->get()
                              ->result_array();
      $imageurl = '';
      if($rs['product'])
    {
      foreach ($rs['product'] as $key => $value) {
        $imageurl[] = $value['image'];
      }
      $images = implode(",",$imageurl);
      $image = explode(',',$images);
      $imagesid = array_unique($image);
      $productimage = $this->db->select('id,image')
                          ->from('userimage')
                          ->where_in('id',$imagesid)
                          ->where('is_del',0)
                          ->get()
                          ->result_array();
      $newimages = '';
      foreach($productimage as $k=>$v)
      {
        $newimages [$v['id']]= $v['image'];
      }
      $ret = array_map(function($item) use($newimages) 
      {
        $imagesIds = explode(',', $item['image']);
        $imageLists = [];
          foreach($imagesIds as $val)
          {
            if(!empty($newimages[$val])){
              $imageLists[] = $newimages[$val]; 
            }
          }
        $item['image'] = $imageLists;
        return $item;
      }, $rs['product']);
      $rs['product'] = $ret;
    }
    $where_in = explode(",", $rs['image']);
    $rs['image'] = $this->db->select("id,image")
                      ->from('userimage')
                      ->where_in('id',$where_in)
                      ->where('is_del',0)
                      ->get()
                      ->result_array();
    $where_in = explode(",", $rs['video']);
    $rs['video'] = $this->db->select("id,video")
                      ->from('uservideo')
                      ->where_in('id',$where_in)
                      ->where('is_del',0)
                      ->get()
                      ->result_array();
    return $rs;
  }   
  
   
}