<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Token extends CI_Model{
    public function getEsToken($secret,$TokenName)
    {
        $appid = "wwa0e551f6f61beed2";
        $secret = $secret;
        $this->load->driver('cache');
        if( $result = $this->cache->file->get($TokenName)){
            return $result;
        }else{
            //若是文件过期根据URL重新获取access_token
            $url="https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid={$appid}&corpsecret={$secret}";
            //发送GET请求
            $result=$this->curl->ssl(false,false)->simple_get($url); 
            $arr=json_decode($result,true);
            $this->cache->file->save('EsToken', $arr['access_token'], 7000);
        }
        return $arr['access_token'];
    }
}