<?php
class Mcollect extends CI_Model{
    public function track(Collect $collect){
        $input = json_decode($this->input->raw_input_stream,TRUE);
        $this->load->database();
        //换取module id
        $module = $this->db
                ->select('id,comment')
                ->from('modules')
                ->where('name',$input['mname'])
                ->get()
                ->row_array();
        $mid = $module['id'];
        if(!$mid){
            return;
        }
        $log = [
            'mid' => $mid,
            'uid' => $collect->uid,
            'target' => $input['id'],
			'opentime' => time(),
            'target_uid'=>$input['target_uid']
        ];////
        $rs = $this->db
                ->insert('log',$log);
        $target_uid = $input['target_uid'];
        $this->load->model('api/MNotify','mnotify');
        
        $this->mnotify->send($collect->userinfo["nickName"],$module['comment'], $target_uid);
        return  $rs;    
    }
    public function getTrack($uid){
        $input = json_decode($this->input->raw_input_stream,TRUE);
        $this->load->database();
        //换取module id
        $module = $this->db
                ->select('id')
                ->from('modules')
                ->where('name',$input['mname'])
                ->get()
                ->row_array();
        $mid = $module['id'];
        if(!$mid){
            return;
        }
        if(empty($input['$page'])){
            $page = 0;
        }else{
          $page = $input['$page'];
        }
        if(isset($input['target'])){
            return $this->getTargeTrack($uid,$mid, $input['target'],$page); 
        }else{
            return $this->getCommonTrack($uid,$mid,$page);
        }

    }
    private function getCommonTrack($uid,$mid,$page=0){
        $limit = 10;
        $offset = $page*$limit;
        $data = $this->db->select('FROM_UNIXTIME(l.opentime,\'%Y-%m-%d\') as days,l.mid,l.uid,u.username,u.avatar,count(l.uid) as total')
                      ->from('log as l')
                      ->join('card as u','u.uid = l.uid','left')
                      ->where(['l.mid'=>$mid,'l.target_uid'=>$uid])
                      ->where('l.uid != l.target_uid')
                      ->group_by('days,l.mid,l.uid,u.username,u.avatar')
                      ->order_by('days','DESC')
                      ->limit($limit,$offset)
                      ->get()
                      ->result_array();
        foreach ($data as $v){
            $arr[$v['days']][] = $v;
        }
        if(!empty($arr)){
          $arr['page'] = $page;
          return  $arr;
        }
    }
    private function getTargeTrack($uid,$mid,$target,$page=0){
        $limit = 10;
        $offset = $page*$limit;
        $data = $this->db->select('FROM_UNIXTIME(l.opentime,\'%Y-%m-%d\') as days,l.mid,l.uid,u.username,u.avatar,count(l.uid) as total')
                      ->from('log as l')
                      ->join('card as u','u.uid = l.uid','left')
                      ->where('l.uid != l.target_uid')
                      ->where(['l.mid'=>$mid,'l.target_uid'=>$uid,'l.target'=>$target])
                      ->group_by('days,l.mid,l.uid,u.username,u.avatar')
                      ->order_by('days','DESC')
                      ->limit($limit,$offset)
                      ->get()
                      ->result_array();
        foreach ($data as $v){
            $arr[$v['days']][] = $v;
        }
        if(!empty($arr)){
          $arr['page'] = $page;
          return $arr;
        }
    }
    public function savecard($input){
        $this->load->database();
        //换取module id
        $module = $this->db
                ->select('id,comment')
                ->from('modules')
                ->where('name',$input['mname'])
                ->get()
                ->row_array();
        $mid = $module['id'];
        if(!$mid){
            return;
        }
      $car_uid = $this->getuseruid($input['car_id']);
        $log = [
            'mid' => $mid,
            'uid' => $collect->uid,
			'opentime' => time(),
            'target' => $input['car_id'],
            'target_uid'=>$car_uid
        ];
        $rs = $this->db
                ->insert('log',$log);
        $target_uid = $input['target_uid'];
        $this->load->model('api/MNotify','mnotify');
        $this->mnotify->send($collect->userinfo["nickName"],$module['comment'], $target_uid);
        return  $rs;
    }
    public function getuseruid($car_id){
      $rs = $this->db->select('uid')
                ->from('card')
                ->where('id',$car_id)
                ->get()
                ->row_array();
      return $rs['uid'];
    }
}
