<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mcompany extends MY_Model{
    public function __construct() {
    parent::__construct();
    }
    public function get_company(){
    	$rs =  $this->db->select('*')
		    			->from('company')
		    			->get()
		    			->row_array();
        return $rs;   
    }
    public function up_company(){
      $input = $this->input->post();
      if($input['image'] != $input['fileimage']){
            $path = "upload";
            $input['image'] = $this->base64_image_content($input['fileimage'],$path);
        }
         $data = [
        'company' => $input['company'],
        'address' => $input['address'],
        'website' => $input['website'],
        'company_login'   => $input['image'],
       ];  
       $rs = $this->db->update('company',$data,['id'=>$input['id']]);
       return $rs;
    }
    function base64_image_content($base64_image_content,$path){
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)){
            $type = $result[2];
            $new_file = $path."/".date('Ymd',time())."/";
            if(!file_exists($new_file)){
                mkdir($new_file, 0700);
            }
            $new_file = $new_file.time().".{$type}";
            if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content)))){
                return '/'.$new_file;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

} 