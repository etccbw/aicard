<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mcard extends CI_Model{
		function __construct()
	{
    parent::__construct();
		$this->load->database();
	}
  public function getcard($input)
	{
    if(empty($input['car_id'])){
      //没有传ID自己查看自己
      // $this->load->model('api/Mgetimage','am');
      $uid=$this->uid;
      $where = [
        'uid'      =>$uid,
        'is_del'   =>0,
        'is_found' =>1
        ];
     // $card_id = $this->am->getDefaultCardByUserId($uid);
      $product_where = [
       'is_del'=>0,
     ];
    }else{
        $card_id = $input['car_id'];
        $product_where = [
         'is_del'=>0,
         'is_audited'=>1
       ];
        $where = [
        'id'       =>$card_id,
        'is_del'   =>0,
        'is_found' =>1
        ];
    }
   
    $rs = $this->db->select("*")
                   ->from("card")
                   ->where($where)
                   ->get()
                   ->row_array();
    if(empty($rs)){
      return false;
    }             
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
     if($rs['is_del'] == 1){ return $rs = 1;}
     $where_in = explode(",", $rs['product']);
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
  public function searchcard($input)
	{
    $uid = $input['uid'];
    $name = $input['name'];
    $rs = $this->db->select("car_id")
                   ->from('users')
                   ->where(['mid'=>$uid,'is_del'=>0])
                   ->get()
                   ->result_array();
    $data = array();
     foreach ( $rs as  $v => $k){
       $data[] = $k['car_id'];
     }
    $like = [
         'username'   =>  $name,
                ];
    $rs = $this->db->select("*")
                   ->from('card')
                   ->where_in('uid',$data)
                   ->like('username',$name)
                   ->get()
                   ->result_array();
    return $rs;
  }
  public function cardlist($uid)
  { 
	$ret = $this->db->select('id')
		->from('card')
		->where('uid',$uid)
		->get()
        ->row_array();
	if(empty($ret)){return false;}
    $company_member = $this->db->select('username,tel,company_id,position as duties')
                    ->from('company_member')
                    ->where('uid',$uid)
                    ->get()
                    ->row_array();
    $company = $this->db->select('company,address')
                    ->from('company')
                    ->where('id',$company_member['company_id'])
                    ->get()
                    ->row_array();
    $rs = $this->db->select('email,avatar,uid')
                    ->from('unaudited_card')
                    ->where('uid',$uid)
                    ->get()
                    ->row_array();
    $res = array_merge_recursive($company,$company_member,$rs);
    return $res;
  }
  public function updatecard($input)
  {
      $uid = $input['uid'];
      $id = $input['id'];
      $result = $this->db->select('username,tel,company_id')
                      ->from('company_member')
                      ->where('uid',$uid)
                      ->get()
                      ->row_array();
      if(empty($result))
        {
          $tel = $input['tel'];
          $company = "";
          $company_id = 0;
          $username = $input['username']; 
          $address =  $input['address'];
        }else
          {
            $ret = $this->db->select('address,company')
                          ->from('company')
                          ->where('id',$result['company_id'])
                          ->get()
                          ->row_array();
            $tel = $result['tel'];
            $company = $ret['company'];
            $company_id = $result['company_id'];
            $username = $result['username']; 
            $address = $ret['address']; 
          }
        $input['image'] = implode(",", $input['image']);
        $input['product'] = implode(",", $input['product']);
        $input['video'] = implode(",", $input['video']);
        $data = array(
          'avatar' =>$input['avatar'],
          'introduce' =>$input['introduce'],
          'image' =>$input['image'],
          'video' =>$input['video'],
          'product'=>$input['product'],
          'is_audited'=>0
        );
        $rs = $this->db->update('unaudited_card',$data,['id'=>$id]);
        $log = [
              'mid' => 10,
              'uid' => $uid,
			  'opentime' => time(),
              'target' => $uid,
              'target_uid'=>$uid
              ];
        $this->db->insert('log',$log);
    return $rs;
  }

  public function getunauditedcard($input)
	{
    $uid=$this->uid;
    $where = [
      'uid'       =>$uid,
      'is_del'   =>0,
    ];
    $rs = $this->db->select("*")
                   ->from("unaudited_card")
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
  public function getdetails(){
    $uid = $this->uid;
    $rs = $this->db->select('is_audited')
                      ->from('unaudited_card')
                      ->where('uid',$uid)
                      ->get()
                      ->row_array();
    return $rs['is_audited'];
  }
}