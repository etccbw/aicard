<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MNotify extends CI_Model{
    public function send($username,$target,$target_uid){
        $this->load->model('Enterprise_WeChat/Token');
        $rs = $this->db->select('wc_userid')
                      ->from('company_member')
                      ->where('uid',$target_uid)
                      ->get()
                      ->row_array();
        $UserID = $rs['wc_userid'];
        $secret = "EKfXBbJnN6nABhZnAnUEaJKOYVqmEkGkLmu2nso1rzc";
        $TokenName = "Radar_Token";
        $token  = $this->Token->getEsToken($secret,$TokenName);
            $body = [
           "touser" => "$UserID",
           "toparty" => "",
           "totag" => "",
           "msgtype" => "text",
           "agentid" => 1000002,
           "text" => [
               "content" => "{$username}正在访问你的{$target}页面",
           ],
           "safe"=>0
        ];
        $url  = "https://qyapi.weixin.qq.com/cgi-bin/message/send?access_token={$token}";
        $res = $this->curl->simple_post($url, json_encode($body));

    }

}