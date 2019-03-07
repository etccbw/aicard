<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Morganization extends CI_Model{
   public function __construct() {
    parent::__construct();
    $this->load->database();
    }
  public function getlist(){
    $rs = $this->db->select('*')
            ->from('nodeinfo')
            ->where('f_id',0)
            ->get()
            ->row_array();
    return $rs;
  }
    public function getTree(){
        $input = $this->input->post();
        if(!$input['id']){
            return FALSE;
        }
        $data['partment'] =  $this->db
                ->select('name,id')
                ->from('nodeinfo')
                ->where(['id'=>$input['id'],'is_del'=>'0'])
                ->get()
                ->row_array();
        $data['tree'] = $this->db
                ->select('*')
                ->from('nodeinfo')
                ->where(['f_id'=>$input['id'],'is_del'=>'0'])
                ->get()
                ->result_array();
        $data['member'] = $this->db
                ->select('m.*,no.name as partment')
                ->from('company_member m')
                ->join('nodeinfo no','no.id = m.company_group','left')
                ->where(['m.company_group'=>$input['id'],'m.is_del'=>'0'])
                ->get()
                ->result_array();
        return $data;
    }
    public function getDepartment(){
        $input = $this->input->post();
        return $this->db
                ->select('*')
                ->where(['id'=>$input['id'],'is_del'=>'0'])
                ->get('nodeinfo')
                ->row_array();
        
    }
    public function addMember(){
        $input = $this->input->post();
        $rs = $this->db->select('id')
                    ->where('tel' ,$input['tel'])
                    ->get('company_member')
                    ->row_array();
        if(empty($rs)){
            return $this->db
                ->insert('company_member',$input);
        }else{
            return false;
        }
    }
    public function addDepartment(){
        $input = $this->input->post();
        return $this->db
                ->insert('nodeinfo',$input);
                
    }
    public function editMember(){
        $input = $this->input->post();
        $data = $input;
        unset($data['id']);
        return $this->db
                ->update('company_member',$data,['id'=>$input['id']]);
                
    }
    public function editDepartment(){
        $input = $this->input->post();
        $data = $input;
        unset($data['id']);
        return $this->db
                ->update('nodeinfo',$data,['id'=>$input['id']]);
                
    }
    public function getMember(){
        $input = $this->input->post();
        return $this->db
                ->select('cm.*,no.name as department')
                ->from('company_member cm')
                ->join('nodeinfo no','no.id=cm.company_group','left')
                ->where(['cm.id'=>$input['id'],'cm.is_del'=>'0'])
                ->get()
                ->row_array();
        
    }
    public function delMember(){
        $input = $this->input->post();
        $ret = $this->db->select('uid')
                ->from('company_member')
                ->where('id',$input['id'])
                ->get()
                ->row_array();
        $this->db->update('card',['is_del'=>'1'],['uid'=>$ret['uid']]);
        return $this->db
                ->update('company_member',['is_del'=>'1'],['id'=>$input['id']]);
    }
    public function delDepartment(){
        $input = $this->input->post();
        return $this->db
                ->update('nodeinfo',['is_del'=>'1'],['id'=>$input['id']]);
    }
}
