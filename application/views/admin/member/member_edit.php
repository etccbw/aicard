<!DOCTYPE html>
<html lang="en">
<?=$header?>
<body data-type="index">
    <script src="/assets/js/theme.js"></script>
    <script src="/assets/js/common.js"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
       <?=$top?>
        <!-- 风格切换 -->
       <?=$style?>
        <!-- 侧边导航栏 -->
         <?=$left_nav?>
        <!-- 内容区域 -->
        <style type="text/css">
            .avatar{
                width: 100px;
                height: 100px;
            }
            .video{
                width:300px;
                height:300px;
            }
/*            .am-form-video{
     width: 240px;
  height: 240px;
}*/
.imagelist{
  float: left;
  width: 120px;
  height: 120px;
}
.video{
    width: 100px;
    height: 100px;
}
.videolist{
   float: left;
  width: 120px;
  height: 120px;
  margin: 20px;   
}
.imgage img{
    width: 100px;
    height: 90px;
}
.imagediv{
    width: 130px;
    height: 160px;
    float: left;  
    margin: 7px;
}
.imagelist{
  width: 120px;
  height: 120px;
}
.imgage img{
    width: 100px;
    height: 90px;
}
.am-form-avatar img{
   width: 100px;
    height: 90px;   
}
.am-form-image img{
    width: 120px;
    height: 120px; 
    margin: 5px;   
}
        </style>
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">修改图片</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">
                                
                                <form class="am-form tpl-form-border-form tpl-form-border-br " id="form" action="<?=$action?>" method="post">
                                <input name="id" value="<?=$items['id']?>"  type="hidden">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text"   disabled="true" name="username" value="<?=$items['username']?>" class="tpl-form-input" id="user-name" placeholder="请输入名称" required>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">用户头像 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                           <div class="am-form-avatar">
                                                <a >
                                                <?php if($items['avatar']): ?>
                                                <img src="<?=$items['avatar']?>"  >
                                                <?php else: ?>
                                                <img  src="/assets/img/add_image.png" >
                                                <?php endif; ?>
                                                </a>
                                                <input name="avatar" value="<?=$items['avatar']?>"  type="hidden">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">公司名称 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text"  name="company" value="<?=$items['company']?>" class="tpl-form-input" id="user-name"  disabled="true" placeholder="请输入名称" required>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">职 责 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                             <input type="text"  disabled="true"  name="position" value="<?=$items['position']?>" class="tpl-form-input" id="user-name" placeholder="请输入名称" required>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">联系电话 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                          <input type="text"  name="tel" value="<?=$items['tel']?>" class="tpl-form-input" id="user-name"  disabled="true" placeholder="请输入名称" required>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">邮 箱 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                             <input type="text"  name="email" value="<?=$items['email']?>" class="tpl-form-input" id="user-name" placeholder="请输入名称" required>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">公司地址 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                           <input type="text"  disabled="true"  name="address" value="<?=$items['address']?>" class="tpl-form-input" id="user-name" placeholder="请输入名称" required>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">个人介绍 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                       <textarea class="" rows="5" name="introduce" id="doc-ta-1"><?=$items['introduce']?></textarea>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">宣传图片 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-image">
                                                <a href="javascript::" id="am-form-imagedate" class="imgage">
                                                <?php if($items['image']): ?>
                                                   <?php foreach($items['image'] as $k => $val):?>
                                                <img src="<?=$val['image']?>"  imgid="<?=$val['id']?>" >
                                                    <?php endforeach?>
                                                <?php else: ?>
                                                <img src="/assets/img/add_image.png" class="tpl-table-line-img" alt="">
                                                <?php endif; ?>
                                                </a>
                                                <input name="image" value="" id="input-image" type="hidden">
                                            </div>
                                        </div>
                                    </div>
                                 <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">视频 <span class="tpl-form-line-small-title">video</span></label>
                                        <div class="am-u-sm-9">
                                         <div class="am-form-video">
                                                <a href="javascript::" id="doc-prompt-toggle" class="from-video" >
                                                 <?php if(!empty($items['video'])): ?>
                                            <video  src="<?=$items['video'][0]['video']?>" class="tpl-table-line-video" controls="controls" width="240px" height="240px" class="video" ></video > 
                                             <?php else: ?>
                                                <video  src="" class="tpl-table-line-video" controls="controls" width="240px" height="240px" class="video" ></video > 
                                                <?php endif;?>  
                                            <?php if(!empty($items['video'][0])){ $videovalue = $items['video'][0]['id'];}else{$videovalue ="";}?>

                                                <input name="video" value="<?=$videovalue?>" id="input-video" type="hidden">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">分类 <span class="tpl-form-line-small-title">Category</span></label>
                                       
                                        <div class="am-u-sm-9">
                                            <select multiple data-am-selected="{searchBox: 1}" name="product_id[]" value="<?php foreach($items['product'] as $v){ echo $v['title'].",";}?>" style="display: none;" required>
                                            <?php foreach($product as $k => $v):?>
                                              <option value="<?=$v['id']?>"   <?php foreach($items['product'] as $val){ echo $v['id']==$val['id']?'selected':'';} ?>> <?=$v['title']?></option>
                                               <?php endforeach?> 
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success submit">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?=$footer_js?>

<div class="am-modal am-modal-prompt" tabindex="-1" id="my-prompt-image">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">图片选择</div>
    <div class="am-modal-bd">
         <?php foreach ($imagelist as $key=>$v): ?>
            <div class="imagediv"><li class="idimage"><img src="<?=$v['image']?>" class="imagelist"  imageid="<?=$v['id']?>" alt="">
            <label class= "product-buyer-name">
            <input type="checkbox"  dataid="<?=$v['id']?>"  name="imagepath" dataurl="<?=$v['image']?>" />
            <?=substr($v['image'],0,15). '...'?></label>
            </li> 
            </div>
            <?php endforeach; ?>
    </div>
    <div class="am-modal-footer">
      <span  class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span  class="am-modal-btn" data-am-modal-confirm>提交</span>
    </div>
  </div>
</div>


<div class="am-modal am-modal-prompt" tabindex="-1" id="my-prompt-avatar">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">头像选择</div>
    <div class="am-modal-bd">
         <?php foreach ($imagelist as $key=>$v): ?>
            <div class="imagediv"><li class="idimage"><img src="<?=$v['image']?>" class="imagelist"  imageid="<?=$v['id']?>" alt="">
            <label class= "product-buyer-name">
            <input type="checkbox"  dataid="<?=$v['id']?>"  name="avatrpath" dataurl="<?=$v['image']?>" />
            <?=substr($v['image'],0,15). '...'?></label>
            </li> 
            </div>
            <?php endforeach; ?>
    </div>
    <div class="am-modal-footer">
      <span  class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span  class="am-modal-btn" data-am-modal-confirm>提交</span>
    </div>
  </div>
</div>

<div class="am-modal am-modal-prompt" tabindex="-1" id="my-prompt-video">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">视频选择</div>
    <div class="am-modal-bd">

         <?php foreach ($videolist as $key=>$v): ?>
            <li  class="videolist"> <video  src="<?=$v['video']?>" class="video" controls="controls" width="120px" height="120px" videoid="<?=$v['id']?>" ></video > <label class= "product-buyer-name">
            <input type="checkbox"  dataid="<?=$v['id']?>"  name="videopath" dataurl="<?=$v['video']?>" />
            <?=substr($v['video'],0,15). '...'?></label>
            </li>
                 <?php endforeach; ?>
    </div>
    <div class="am-modal-footer">
      <span  class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span  class="am-modal-btn" data-am-modal-confirm>提交</span>
    </div>
  </div>
</div>
<style type="text/css">

</style>
<script>
//用户头像获取
$(function() {
  $('.am-form-avatar').on('click', function() {
    index = $(this).index(); 
    var avatrpath = $('[name="avatrpath"]');
    avatrpath.change(function () {
       if(this.checked && avatrpath.filter(':checked').length > 1){this.checked = false ;alert("只能选一张图片!");} 
    })   
    $('#my-prompt-avatar').modal({
      relatedTarget: this,
      onConfirm: function(e) {
         var imageurl="",imageid="";
         $("input:checkbox[name='avatrpath']:checked").each(function() { // 遍历name=test的多选框
           imageurl = $(this).attr('dataurl');  // 每一个被选中项的值
        });
         var avatarhtml= "";   
         var img1 = '<a><img src=\"';
         var img2 = '\"></a><input name=\"avatar\" value=\"';
         var img3 = '\" type=\"hidden">';
         var avatarhtml = img1+imageurl+img2+imageurl+img3 ;
         $('.am-form-avatar').html(avatarhtml);
      },
      onCancel: function(e) {
      }
    });
  });
});
//图片获取
$(function() {
  $('.am-form-image').on('click', function() {
    index = $(this).index(); 
    var imagepath = $('[name="imagepath"]');
    imagepath.change(function () {
       if(this.checked && imagepath.filter(':checked').length > 3){this.checked = false ;alert("最多只能选三张图片!");} 
    })   
    $('#my-prompt-image').modal({
      relatedTarget: this,
      onConfirm: function(e) {
            var imageurl="",imageid="";
            $("input:checkbox[name='imagepath']:checked").each(function() { // 遍历name=test的多选框
            imageurl += $(this).attr('dataurl')+",";  // 每一个被选中项的值
            imageid += $(this).attr("dataid")+","; 
            });
            imageurl = (imageurl.substring(0,imageurl.length-1)).split(',');
            imageid = (imageid.substring(0,imageid.length-1)).split(',');
            newhtml = ArrayToObj(imageurl,imageid);
            function ArrayToObj(arrA, arrB) {
            var info = {};
            for(var i = 0; i < arrA.length; i++ ) {
            info[arrA[i]] = arrB[i];
            }
            return info;
            }
            newimgarr = ArrayToObj(imageurl,imageid);
            var newhtml= "";
            var img0 = '<a href=\"javascript::\" id=\"am-form-imagedate\" class=\"imgage\">';
            var img1 = '<img src=\"';
            var img2 = '\"   imgid=\"';
            var img3 = '\" >';
            var img4 = '</a><input name=\"image\" value=\"\" id=\"input-image\" type=\"hidden\">';
            $.each(newimgarr,function(i,t){
            newhtml +=img1+i+img2+t+img3;
            });
            newhtml = img0 + newhtml + img4;
            $('.am-form-image').html(newhtml);
      },
      onCancel: function(e) {
      }
    });
  });
});
//视频获取
$(function() {
  $('.am-form-video').on('click', function() {
    index = $(this).index(); 

    var videopath = $('[name="videopath"]');
    videopath.change(function () {
       if(this.checked && videopath.filter(':checked').length > 1){this.checked = false ;alert("只能选取一个视频!");}
    })   
    $('#my-prompt-video').modal({
      relatedTarget: this,
      onConfirm: function(e) {
         var imageurl="",imageid="";
         $("input:checkbox[name='videopath']:checked").each(function() { // 遍历name=test的多选框
           videourl = $(this).attr('dataurl');  // 每一个被选中项的值
           videoid = $(this).attr('dataid');
        });
         var avatarhtml= "";   
         var video1 = '<a href=\"javascript::\" id=\"doc-prompt-toggle\" class=\"from-video\"><video src=\"';
         var video2 = '" class=\"tpl-table-line-video\ controls=\"controls\" width=\"240px\" height=\"240px\"></video> ';
         var video3 = '<input name=\"video\" value=\"';
         var video4 = '\" id=\"input-video\" type=\"hidden\"></a>';
         var videohtml = video1+videourl+video2+video3+videoid+video4 ;
         $('.am-form-video').html(videohtml);
      },
      onCancel: function(e) {
      }
    });
  });
});

$(function(){
$('.submit').on('click',function(){
    var alts="";
    var oUl=$("#am-form-imagedate");
    var olis=oUl.children() ;
    for(var i=0;i<olis.length;i++){
    var alt=olis[i];
    alts += $(alt).attr('imgid')+",";
    }
    alts=alts.substring(0,alts.length-1);
    $('#input-image').val(alts);
    var avatar = $('#doc-prompt-avatar').children()[0];
    var avatarval  =  $(avatar).attr('src');
    $("input[name='avatar']").attr('value',avatarval);
        $.ajax({
        url:$("#form").attr('action'),
        dataType:'json',
        data:new FormData($('#form')[0]),
        type:'post',
        processData: false,
        contentType: false,
        error:function(){},
        success:function(res){
            if(res === true){
            history.back();
            }else{
            msg(res.msg);
            }
        },
    });
});
});
</script>