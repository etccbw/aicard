<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Token extends CI_Model{
    public function getEsToken()
    {
        $appid="ww04ae1a424b7077da";
        $secret="dfAjqn-yrMLe55_EuB710cxVHuzqR_kE6MmHR1t8350";
        $this->load->driver('cache');
        if( $result = $this->cache->file->get('EsToken')){
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