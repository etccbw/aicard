<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mgetimage extends CI_Model{
		function __construct()
	{
    parent::__construct();
		$this->load->database();
	}
	public function Code($id)
	{
		$rs = $this->db->select('id')
				   ->from('user_info')
				   ->where(['openId'=>'$id'])
				   ->get()
				   ->row_array();
				   return $rs;
	}
  public function getcode($uid)
	{
		$rs = $this->db->select('username,avatar,duties,tel,email,company_id,card_style')
				   ->from('card') 
				   ->where('uid',$uid)
				   ->get()
				   ->row_array();
    $rs['company_info'] = $this->db->select('company,address,website')
                                  ->from('company')
                                  ->where('id',$rs['company_id'])
                                  ->get()
                                  ->row_array();
    $where = [
             'card_style' =>$rs['card_style'],
             'company_id'=>$rs['company_id']
           ];
    $rs['login'] = $this->db->select('login')
                            ->from('card_style')
                            ->where($where)
                            ->get()
                            ->row_array();
		return $rs;
	}
	public function codeimage($input){
	//default card id;
	// $this->load->model('api/Mcard','mcd');
	if(empty($input['car_id'])){
    $uid= $this->uid;
		$card_id = $this->getDefaultCardByUserId($uid);
	}else{
		$card_id = $input['car_id'];
	}
	if(!$card_id){
		return false;
	}
	$base = "upload/{$card_id}.jpg";
    $qrcodes = FCPATH.$base;
    if(file_exists($qrcodes)){
      return '/'.$base;
    }
		$this->load->library('Curl');
		$token= $this->getAccessToken();

		$result=$this->curl->ssl(false,false)->simple_post("https://api.weixin.qq.com/cgi-bin/wxaapp/createwxaqrcode?access_token={$token}", json_encode(["path"=>"pages/card/card?car_id={$card_id}"]));
    $file = fopen($qrcodes, "w+");
		fwrite($file,$result);
		fclose($file);
    return '/'.$base;
  }

  public function getAccessToken()
    {
        $appid="wxfd95d065e748cb2b";
        $secret="48de32d113831d94142fd4a1a0e8a37f";
        //access_token暂存地址在和入口文件同级目录下
        $token_file= APPPATH.'cache/access_token.txt';
        //判断access_token文件是否已经过期，未过期直接返回文件内容
        $life_time=5400;
        if (file_exists($token_file) && time()-filemtime($token_file)<$life_time) {
            return file_get_contents($token_file);
        }
        //若是文件过期根据URL重新获取access_token
        $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$secret";
        //发送GET请求
        $result=$this->request($url);
        if (!$result) {
            return false;
        }
        //获取响应返回结果
        $arr=json_decode($result,true);
        //将access_token保存在文件中
        file_put_contents($token_file, $arr['access_token']);
        return $arr['access_token'];
    }
    private function request($url,$data=null){
        $curl=curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);

        //设定为不验证证书和host
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);

        if(!empty($data)){
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }

        // 将curl_exec()获取的信息以文件流的形式返回，而不是直接输出
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

        $output=curl_exec($curl);
        if (false===$output) {
            echo "<br/>",curl_error($curl),"<br/>";
            return false;
        }
        curl_close($curl);
        return $output;
    }
    public function getDefaultCardByUserId($uid){
    	$rs =  $this->db->select('id')
    				->from('card')
    				->where('uid',$uid)
    				->get()
    				->row_array();
    	return $rs['id'];
    }

}