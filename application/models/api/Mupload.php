<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mupload extends CI_Model{
		function __construct()
	{
    parent::__construct();
		$this->load->database();
	}

//图片文件

	public function addimage($input)
	{
    $uid = $input['uid'];
    $image = $input['image'];
    $pieces  = explode(",", $image);
    $data = Array();
    foreach ($pieces as $key => $value) {
        $data[]=Array('image'=>$value,'uid'=>$uid);
    }
    unset($value);unset($key);
    $this->db->insert_batch('userimage',$data);
    $data = $this->db->insert_id();
    $cnum = count($pieces);
    $image_id = "";
    for($i=0;$i<$cnum;$i++){$image_id .= $data++.',';};
    $image_id  = explode(",", rtrim($image_id, ','));
    $logs = "";
    foreach ($image_id as $key => $value) {
      $logs[]=Array('target'=>$value,'mid' => 11,'uid' => $uid,'target_uid'=>$uid);
    }
    unset($value);unset($key);
    $this->db->insert_batch('log',$logs);
    $rs =  $this->db->select('id,image')
                    ->from('userimage')
                    ->where('uid',$uid)
                    ->where('is_del',0)
                    ->get()
                    ->result_array();
    return $rs;
	}
  	public function getimage($input)
	{
    $uid = $input['uid'];
    $rs =  $this->db->select('id,image')
                    ->from('userimage')
                    ->where('uid',$uid)
                    ->where('is_del',0)
                    ->get()
                    ->result_array();
    return $rs;
	}
  	public function deimage($input)
	{
    $id = $input['id'];
    $uid = $input['uid'];
    $pieces  = explode(",", $id);
    $data = Array();
    foreach ($pieces as $key => $value) 
    {
      $data[]=Array('id'=>$value,'is_del'=>1);
    }
    $this->db->update_batch('userimage',$data,'id');
    $logs = "";
     foreach ($pieces as $key => $value) 
    {
      $logs[]=Array('target'=>$value,'mid'=>14,'uid' => $uid,'target_uid'=>$uid);
    }
    $this->db->insert_batch('log',$logs);
    $rs =  $this->db->select('id,image')
                    ->from('userimage')
                    ->where('uid',$uid)
                    ->where('is_del',0)
                    ->get()
                    ->result_array();
    return $rs;
	}

//视频文件

  	public function addvideo($input)
	{
    $uid = $input['uid'];
    $video = $input['video'];
    $data = array(
      'uid'    => $uid,
      'video' => $video,
    );
    $this->db->insert('uservideo',$data);
    $video_id = $this->db->insert_id();
      $log = [
            'mid' => 15,
            'uid' => $uid,
            'target' => $video_id,
            'target_uid'=>$uid
        ];
    $this->db->insert('log',$log);
    $rs =  $this->db->select('id,video')
                    ->from('uservideo')
                    ->where('uid',$uid)
                    ->where('is_del',0)
                    ->get()
                    ->result_array();
    return $rs;
	}
  	public function videoget($input)
	{
    $uid = $input['uid'];
    $rs =  $this->db->select('id,video')
                    ->from('uservideo')
                    ->where('uid',$uid)
                    ->where('is_del',0)
                    ->get()
                    ->result_array();
    return $rs;
	}
  	public function devideo($input)
	{
    $id = $input['id'];
    $uid = $input['uid'];
    $pieces  = explode(",", $id);
    $data = Array();
    foreach ($pieces as $key => $value) 
    {
      $data[]=Array('id'=>$value,'is_del'=>1);
    }
    $this->db->update_batch('uservideo',$data,'id');
    $logs = "";
     foreach ($pieces as $key => $value) 
    {
      $logs[]=Array('target'=>$value,'mid'=>18,'uid' => $uid,'target_uid'=>$uid);
    }
    $this->db->insert_batch('log',$logs);
    $rs =  $this->db->select('id,video')
                    ->from('uservideo')
                    ->where('uid',$uid)
                    ->where('is_del',0)
                    ->get()
                    ->result_array();
    return $rs;
	}
}