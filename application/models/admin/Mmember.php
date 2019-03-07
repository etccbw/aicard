<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mmember extends CI_Model{
     public function __construct() {
    parent::__construct();
    $this->load->database();
    }
  public function getlist($limit=20,$offset=0){
     $where = [
      'is_del'=>0,
      'is_found'=>1
    ];
    $input = $this->input->get();
    if(isset($input['sch'])){
       $like = [
                'username'   => $input['sch'],
                ];
       $rs = $this->db->select('*')
          ->from('card')
          ->where($where)
          ->group_start()
          ->or_like($like)
          ->group_end()
          ->limit($limit,$offset)
          ->get()
          ->result_array();
      }else{
        $rs = $this->db->select('*')
          ->from('card')
          ->where($where)
          ->limit($limit,$offset)
          ->get()
          ->result_array();
      }
       return $rs;
  }
  public function getAllmember(){
    $where = [
      'is_del'=>0,
      'is_found'=>1
    ];
    $rs = $this->db->select('count(id) as conid')
          ->from('card')
          ->where($where)
          ->get()
          ->row_array();
         
   return $rs['conid'];
  }

  public function editcard($id){
    $rs = $this->db->select("id,uid,product,image,video,company_id,avatar,email,introduce")
                   ->from("card")
                   ->where('id',$id)
                   ->get()
                   ->row_array();
    $company = $this->db->select('company,address')
                        ->from('company')
                        ->where('id',$rs['company_id'])
                       ->get()
                       ->row_array();
    $company_member = $this->db->select('username,tel,position')
                        ->from('company_member')
                        ->where('uid',$rs['uid'])
                        ->get()
                        ->row_array();
     $where_in = explode(",", $rs['product']);
     $product_where = [
      'is_del'=>0,
      'is_audited'=>1
     ];
     $rs['product'] = $this->db->select("id,title")
                              ->from('product')
                              ->where_in('id',$where_in)
                              ->where($product_where)
                              ->get()
                              ->result_array();
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
    $res = array_merge($rs,$company,$company_member);
    return $res;
  }
    function getAllimagelist($id){
    $result = $this->getuseruid($id);
    $where = [
      'uid' =>$result['uid'],
      'is_del'=>0
    ];
    $rs = $this->db->select('id,image')
          ->from('userimage')
          ->where($where)
          ->get()
          ->result_array();
    return $rs;
  }
   function getAllvideolist($id){
    $result = $this->getuseruid($id);
    $where = [
      'uid' =>$result['uid'],
      'is_del'=>0
    ];
    $rs = $this->db->select('id,video')
          ->from('uservideo')
          ->where($where)
          ->get()
          ->result_array();
    return $rs;
  }
  function getAllproduct($id){
    $result = $this->getuseruid($id);
    $where = [
      'uid' =>$result['uid'],
      'is_del'=>0,
      'is_audited'=>1
    ];  
  $rs = $this->db->select('id,title')
          ->from('product')
          ->where($where)
          ->get()
          ->result_array();
    return $rs;
  }
  function audited_card($id){
     $data = [
        'is_audited' =>1
      ];
     $this->db->update('unaudited_card',$data,['id'=>$id]);
     $result = $this->db->select('uid,username,avatar,company,duties,tel,email,address,introduce,image,video,product')
                ->from('unaudited_card')
                ->where('id',$id)
                ->get()
                ->row_array();
    $result['is_found'] =1;
    $result['is_del'] = 0;
    $rs = $this->db->update('card',$result,['uid'=>$result['uid']]);
    return $rs;
  }
  function audited_member_edit($id){
    $rs = $this->db->select("*")
                   ->from("unaudited_card")
                   ->where('id',$id)
                   ->get()
                   ->row_array();
     $where_in = explode(",", $rs['product']);
     $rs['product'] = $this->db->select("id,title")
                              ->from('product')
                              ->where_in('id',$where_in)
                              ->where('is_del',0)
                              ->get()
                              ->result_array();
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
  function getaudited($limit=20,$offset=0){
    $where = [
      'is_del'=>0,
      'is_audited'=>0
    ];
    $input = $this->input->get();
    if(isset($input['sch'])){
       $like = [
                'username'   => $input['sch'],
                ];
       $data = $this->db->select('*')
          ->from('unaudited_card')
          ->where($where)
          ->group_start()
          ->or_like($like)
          ->group_end()
          ->limit($limit,$offset)
          ->get()
          ->result_array();
      }else{
        $data = $this->db->select('*')
          ->from('unaudited_card')
          ->where($where)
          ->limit($limit,$offset)
          ->get()
          ->result_array();
      }
    return $data;
  }
  function getallaudited(){
    $data = $this->db->select('count(id) as conid')
                      ->from('unaudited_card')
                      ->where('is_audited',0)
                      ->get()
                      ->row_array();
    return $data['conid'];
  }
  function updatecard($input){
    $product_id =implode(",",$input['product_id']);
    $arr = [
      // 'username'  =>$input['username'],
      'avatar'    =>$input['avatar'],
      //'duties'    =>$input['duties'],
     // 'tel'       =>$input['tel'],
      'email'     =>$input['email'],
      //'address'   =>$input['address'],
      'introduce' =>$input['introduce'],
      'image'     =>$input['image'],
      'video'     =>$input['video'],
     // 'company'   =>$input['company'],
      'product'   =>$product_id,
      'is_found'  =>1
    ];
    $this->db->update('card',$arr,['id'=>$input['id']]);
    $result = $this->db->select('uid')
          ->from('card')
          ->where('id',$input['id'])
          ->get()
          ->row_array();
    $data = [
      // 'username'  =>$input['username'],
      'avatar'    =>$input['avatar'],
      //'duties'    =>$input['duties'],
      //'tel'       =>$input['tel'],
      'email'     =>$input['email'],
      //'address'   =>$input['address'],
      'introduce' =>$input['introduce'],
      'image'     =>$input['image'],
      'video'     =>$input['video'],
      //'company'   =>$input['company'],
      'product'   =>$product_id,
      'is_audited'=>1
    ];
    $rs = $this->db->update('unaudited_card',$data,['uid'=>$result['uid']]);
    return $rs;
  }
  public function delcard($input){
    $card_table = $input['card_table'];
    $data = [
      'is_del'=>1
    ];
    $rs = $this->db->update($card_table,$data,['id'=>$input['id']]);
    return $rs;
  }
  function getuseruid($id){
     $result = $this->db->select('uid')
                        ->from('card')
                        ->where('id',$id)
                        ->get()
                        ->row_array();
     return $result;
  }
  function getAllauproduct($id){
    $result = $this->db->select('uid')
                        ->from('unaudited_card')
                        ->where('id',$id)
                        ->get()
                        ->row_array();
    $where = [
      'uid' =>$result['uid'],
      'is_del'=>0,
      'is_audited'=>1
    ];  
  $rs = $this->db->select('id,title')
          ->from('product')
          ->where($where)
          ->get()
          ->result_array();
    return $rs;
  }
}