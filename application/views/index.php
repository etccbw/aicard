<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="<?php echo base_url('public/css/index.css'); ?>" />
    <script src="<?php echo base_url('public/js/jquery-2.1.1.js'); ?>"></script>
</head>
<body>
  <div>
  	<div class="etc-head">
	 	<img src="<?php echo base_url('public/img/logo.png'); ?>" alt="logo" class="logo">
	 	<h1>官网编辑-深圳市壆岗中亚电子博览中心股份有限公司</h1>
	 </div>
	<div class="container container_c">
       <div id="app_ce" class="u-design">
       	  <div class="tabs-box">
       	  	<div class="ivu-tabs ivu-tabs-card">
       	  		<div class="chosed_mod">
       	  		  <div class="ivu-tabs-tab ivu-tabs-tab-active etc-model">模块组件
       	  		  </div>
       	  		  <div class="ivu-tabs-tab etc-zuj">基本组件
       	  		  </div>
       	  		</div>
       	  		<div class="ivu-tabs-content ivu-tabs-content-animated ivu-zuj" style="display:none;">
       	  		  	<div class="ivu-tabs-tabpane">
       	  		  	  <div class="coms-list">
       	  		  	  	<div id="modular">
			   	  		  	<div class="coms-item" draggable="false"  data-type="9">
			   	  		  		<i class="icon-temp icon-title" alt data-type="9"></i>
			   	  		  		<h3 data-type="9">标题</h3>
			   	  		  	</div>
			   	  		  	<div class="coms-item" draggable="false"  data-type="27">
			   	  		  		<i class="icon-temp icon-text" alt  data-type="27"></i>
			   	  		  		<h3 data-type="27">文本</h3>
			   	  		  	</div>
			   	  		  	<div class="coms-item" draggable="false"  data-type="10">
			   	  		  		<i class="icon-temp icon-img" alt data-type="10"></i>
			   	  		  		<h3 data-type="10">图片</h3>
			   	  		  	</div>
			   	  		  	<div class="coms-item" draggable="false"  data-type="0">
			   	  		  		<i class="icon-temp icon-carouse" alt  data-type="0"></i>
			   	  		  		<h3 data-type="0">轮播图</h3>
			   	  		  	</div>
			   	  		  	<div class="coms-item" draggable="false"  data-type="13">
			   	  		  		<i class="icon-temp icon-video" alt data-type="13"></i>
			   	  		  		<h3 data-type="13">视频</h3>
			   	  		  	</div>
			   	  		  	<div class="coms-item" draggable="false"  data-type="26">
			   	  		  		<i class="icon-temp icon-img-text" alt  data-type="26"></i>
			   	  		  		<h3 data-type="26">图文</h3>
			   	  		  	</div>
			   	  		  	<div class="coms-item" draggable="false"  data-type="16">
			   	  		  		<i class="icon-temp icon-white" alt data-type="16"></i>
			   	  		  		<h3 data-type="16">占位符</h3>
			   	  		  	</div>
			   	  		</div>
		   	  		  </div>
       	  		  	</div>
       	  		</div>
       	  		<div class="ivu-tabs-content ivu-tabs-content-animated ivu-model">
       	  		  	<div class="ivu-tabs-tabpane">
       	  		  	  <div class="coms-list">
       	  		  	  	<div id="modular1">
			   	  		  	<div class="coms-item" draggable="false"  data-type="1">
			   	  		  		<i class="icon-temp icon-info" alt data-type="1"></i>
			   	  		  		<h3 data-type="1">企业简介</h3>
			   	  		  	</div>
			   	  		  	<div class="coms-item" draggable="false"  data-type="25">
			   	  		  		<i class="icon-temp icon-news" alt  data-type="25"></i>
			   	  		  		<h3 data-type="25">企业资讯</h3>
			   	  		  	</div>
			   	  		  	<div class="coms-item" draggable="false"  data-type="4">
			   	  		  		<i class="icon-temp icon-manage" alt data-type="4"></i>
			   	  		  		<h3 data-type="4">管理团队</h3>
			   	  		  	</div>
			   	  		  	<div class="coms-item" draggable="false"  data-type="5">
			   	  		  		<i class="icon-temp icon-corp" alt  data-type="5"></i>
			   	  		  		<h3 data-type="5">合作伙伴</h3>
			   	  		  	</div>
			   	  		  	<div class="coms-item" draggable="false"  data-type="15">
			   	  		  		<i class="icon-temp icon-call" alt data-type="15"></i>
			   	  		  		<h3 data-type="15">电话</h3>
			   	  		  	</div>
			   	  		  	<div class="coms-item" draggable="false"  data-type="8">
			   	  		  		<i class="icon-temp icon-address" alt  data-type="8"></i>
			   	  		  		<h3 data-type="8">地址</h3>
			   	  		  	</div>
			   	  		  	<div class="coms-item" draggable="false"  data-type="7">
			   	  		  		<i class="icon-temp icon-fly" alt data-type="7"></i>
			   	  		  		<h3 data-type="7">联系我们</h3>
			   	  		  	</div>
			   	  		  	<div class="coms-item" draggable="false"  data-type="6">
			   	  		  		<i class="icon-temp icon-hire" alt  data-type="6"></i>
			   	  		  		<h3 data-type="6">企业招聘</h3>
			   	  		  	</div>
			   	  		</div>
		   	  		  </div>
		   	  		</div>
       	  		</div>
       	  	</div>
       	  </div>
       	  <div class="phone-box">
       	  	<div class="show_all" style="top:-286px;"></div>
       	  	<div class="phone-model">
       	  		<div class="phone-screen">
                  <div class="design-preview">
                  	<div class="wp-config"> 官网
                       <img src="<?php echo base_url('public/img/dian.png'); ?>" alt>
                  	</div>
                  	<div class="design-content">
                       <div id="edit-coms" class="edit-coms">
                       	<div class="edit-content" style="position: relative; min-height: 301px;">
                       	</div>
                       </div>
                  	</div>
                  </div>
       	  		</div>
       	  	</div>
       	  </div>
       	  <div>
       	  	<div class='edit-box edit-box-info'>
       	  	</div>
       	  </div>
       </div>  
	</div>
  </div>
</body>
<script>
$(".etc-model").click(function(){
  $(this).addClass('ivu-tabs-tab-active');
  $(this).siblings().removeClass("ivu-tabs-tab-active");
  $('.ivu-model').css('display','block');
  $('.ivu-zuj').css('display','none');
});
$(".etc-zuj").click(function(){
  $(this).addClass('ivu-tabs-tab-active');
  $(this).siblings().removeClass("ivu-tabs-tab-active");
  $('.ivu-zuj').css('display','block');
  $('.ivu-model').css('display','none');
});
</script>
</html>