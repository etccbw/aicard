<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mproduct extends CI_Model{
		function __construct()
	{
    parent::__construct();
		$this->load->database();
	}
	public function addproduct($input)
	{
    $uid = $input['uid'];
    $input['image'] = implode(",", $input['image']);
    $data = array(
      'uid'=>$uid,
      'title' =>$input['title'],
      'image' =>$input['image'],
      'content' =>$input['content'],
      'is_audited'=>0
    );
    $this->db->insert('product',$data);
    $product_id = $this->db->insert_id();
     $log = [
            'mid' => 19,
            'uid' => $uid,
            'target' => $uid,
			'opentime' => time(),
            'target_uid'=>$uid
        ];
        $this->db->insert('log',$log);
    $rs = $this->getproduct($input);
    return $rs;
  }
  	public function upproduct($input)
	{
    $id = $input['id'];
    $uid = $input['uid'];
    $input['image'] = implode(",", $input['image']);
    $data = array(
      'title' =>$input['title'],
      'image' =>$input['image'],
      'content' =>$input['content'],
      'is_audited'=>0
    );
   $this->db->update('product',$data,['id'=>$id]);
   $log = [
            'mid' => 22,
            'uid' => $uid,
            'target' => $id,
            'target_uid'=>$uid
        ];
   $this->db->insert('log',$log);
   $rs = $this->getproduct($input);
    return $rs;
  }
  public function getproduct($input)
	{
    $uid = $input['uid'];
    $rs = $this->db->select("id,title,image,content")
                   ->from('product')
                   ->where('uid',$uid)
                   ->where('is_del',0)
                   ->get()
                   ->result_array();
    if(empty($rs)){return;}               
    $imagearray = array();
    $imagelist = array_column($rs,'image');
    $imagestr = implode(",", $imagelist);
    $imagearray = explode(",", $imagestr);
    $productimage = $this->db->select('id,image')
                          ->from('userimage')
                          ->where_in('id',$imagearray)
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
          	if(isset($newimages[$val])){
          		$imageLists[] = $newimages[$val]; 
          	}
          }
          if(isset($imageLists['0'])){
          	$item['image'] = $imageLists['0'];
          }else{
          	$item['image'] = "";
          }
        return $item;
      }, $rs);
      return $ret;
  }
  public function getproducts($input)
	{
    $id = $input['id'];
    $rs = $this->db->select("*")
                   ->from('product')
                   ->where('id',$id)
                   ->where('is_del',0)
                   ->get()
                   ->result_array();
    $where_in = explode(",", $rs[0]['image']);
    $rs[0]['image'] = $this->db->select("id,image")
                      ->from('userimage')
                      ->where_in('id',$where_in)
                      ->where('is_del',0)
                      ->get()
                      ->result_array();
    return $rs;
  }
  public function delproduct($input)
	{
    
    $id = $input['id'];
    $uid = $input['uid'];
    $pieces  = explode(",", $id);
    $data = Array();
    foreach ($pieces as $key => $value) 
    {
      $data[]=Array('id'=>$value,'is_del'=>1);
    }
    $this->db->update_batch('product',$data,'id');
     $logs = "";
     foreach ($pieces as $key => $value) 
    {
      $logs[]=Array('target'=>$value,'mid'=>23,'uid' => $uid,'target_uid'=>$uid);
    }
    $this->db->insert_batch('log',$logs);
    $rs = $this->getproduct($input);
    return $rs;
  }
}