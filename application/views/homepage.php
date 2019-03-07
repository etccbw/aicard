<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="<?php echo base_url('public/css/index.css'); ?>" />
	 <link rel="stylesheet" href="<?php echo base_url('public/css/app.css'); ?>" />
    <script src="<?php echo base_url('public/js/jquery-2.1.1.js'); ?>"></script>
	<script src="<?php echo base_url('public/js/short.js'); ?>"></script>
  <style type="text/css">
		.black{
			float: right;
			margin: 15px 57px 15px 29px;
		}
	</style>
</head>
<body>
  <div>
  	<div class="etc-head">
	 	<img src="<?php echo base_url('public/img/logo.png'); ?>" alt="logo" class="logo">
	 	<a href="/admin/Home"><h1>官网编辑-深圳市壆岗中亚电子博览中心股份有限公司</h1></a>
     <a href="/admin/Home"><img src="/public/img/black.png" alt="logo" class="black"></a>
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
			   	  		  	<div class="coms-item" draggable="true"  data-type="9">
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
			   	  		  	<!-- <div class="coms-item" draggable="false"  data-type="26">
			   	  		  		<i class="icon-temp icon-img-text" alt  data-type="26"></i>
			   	  		  		<h3 data-type="26">图文</h3>
			   	  		  	</div> -->
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
       	  <div class="phone-box" style="height: 914px;">
       	  	<div class="show_all" style="top:-286px;"></div>
       	  	<div class="phone-model">
       	  		<div class="phone-screen">
                  <div class="design-preview">
                  	<div class="wp-config"> 官网
                       <img src="<?php echo base_url('public/img/dian.png'); ?>" alt>
                  	</div>
                  	<div class="design-content">
                       <div id="edit-coms" class="edit-coms">
                       	<div class="edit-content" style="position: relative;min-height:685px;">
       	             <?php if(!empty($tarr)){
       	  	            foreach ($tarr as $t) {
       	  	              echo $t;
       	  	             } 
       	  	            }else{ echo $mod; } ?>
                       	</div>
                       </div>
                  	</div>
                  </div>
       	  		</div>
       	  	</div>
       	  </div>
       	  <div class="etc-info">
       	  	<?=$set?> 
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
var tpls  = [];
var len = '';
$(".coms-item").click(function(){
  $('.noOne').css('display','none');
	var timestamp = new Date().getTime();
	var addiv = $(this).attr("data-type");//时间戳作为ID//获取data-type的值  $(this).attr("data-type")
	var addid = addiv+'-'+timestamp;

    var url = "<?=site_url('website/homepage/addiv');?>/"+addid;
        //console.log(sessionStorage.tpls);
		if(sessionStorage.tpls){
			tpls = sessionStorage.tpls.split(",");
		}
        $.get(url,function(data){
			$('.edit-content').append(data);
        })
		tpls.push(addid);
		sessionStorage.tpls = tpls;
	var seturl = "<?=site_url('website/homepage/setpage');?>/"+addid;
	$.post(seturl,function(data){
            $('.etc-info').html("");
			$('.etc-info').append(data);
        })
  //sessionStorage.clear(); //清除存储
  console.log(sessionStorage.tpls); 
}); 
function edit_mode(obj){
  var id = $(obj).attr('id');
  var seturl = "<?=site_url('website/homepage/edit_show')?>/"+id;
  $.post(seturl,function(data){
	    $('.etc-info').html("");
		$('.etc-info').append(data);
	})
}
function mod_mouseover(obj){
    $(obj).css('border','1px solid #bbb');
	$(obj).find('.del-mod').css('display','block');
}
function mod_mouseout(obj){
    $(obj).css('border','1px solid transparent');
    $(obj).find('.del-mod').css('display','none');
}
function delete_mode(obj){
	var id = $(obj).parent().attr('id');
	var seturl = "<?=site_url('website/homepage/del_mode')?>";
	$(obj).parent().remove();
	$.post(seturl,{id:id},function(data){
		if(data.tarr){
			alert('删除成功！');
		}else{
			alert('删除失败！');
		}
        },'json');

}
var sort = {};
      $(function() {
          $('.list-complate-item').arrangeable({dragSelector: '.sortable-ghost',callback:function(){
            var divid = $('.edit-content').find('.list-complate-item'); 
            divid.map(function(index,value){
                sort[index] = {
                    sort:index,
                    id:$(divid[index]).attr('id')
                }
            })
            $.ajax({
                url: "<?=site_url('website/homepage/sort')?>",
                data:sort,
                type:"POST",
                dataType:'json',
                success:function(e){
                    console.log(e)
                }
            })
        }
        
      });
      
  })

//console.log(len);
//console.log(tpls.length);
//   var jsn = sessionStorage.tpls.split(","); //在每个逗号(,)处进行分解
// jsn.map(function(value,index){

// 	var url = "http://172.16.11.1/CI/index.php/homepage/addiv/"+value;
// 	$.get(url,function(data){
// 		$('.edit-content').append(data);
// 	})
// }) 

// removeTpl();
// function removeTpl(id){
// 	var idx = jsn.indexOf(id);
// 	jsn.splice(idx,1);
// }
sessionStorage.clear(); //清除存储 
</script>
</html>