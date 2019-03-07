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
                ->where('id',$input['id'])
                ->get()
                ->row_array();
        $data['tree'] = $this->db
                ->select('*')
                ->from('nodeinfo')
                ->where('f_id',$input['id'])
                ->get()
                ->result_array();
        $data['member'] = $this->db
                ->select('m.*,no.name as partment')
                ->from('company_member m')
                ->join('nodeinfo no','no.id = m.company_group','left')
                ->where(['m.company_group'=>$input['id']])
                ->get()
                ->result_array();
        return $data;
    }
    public function getDepartment(){
        $input = $this->input->post();
        return $this->db
                ->select('*')
                ->where('id',$input['id'])
                ->get('nodeinfo')
                ->row_array();
        
    }
    public function addMember(){
        $input = $this->input->post();
        return $this->db
                ->insert('company_member',$input);
                
    }
    public function addDepartment(){
        $input = $this->input->post();
        return $this->db
                ->insert('nodeinfo',$input);
                
    }
    public function editMember(){
        $input = $this->input->post();
        return $this->db
                ->insert('company_member',$input,['id'=>$input['id']]);
                
    }
    public function editDepartment(){
        $input = $this->input->post();
        return $this->db
                ->update('nodeinfo',$input,['id'=>$input['id']]);
                
    }
    public function getMember(){
        $input = $this->input->post();
        return $this->db
                ->selct('*')
                ->from('company_member')
                ->where('id',$input['id'])
                ->get()
                ->row_array();
        
    }
}
