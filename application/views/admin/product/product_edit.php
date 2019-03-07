<!DOCTYPE html>
<html lang="en">
<?=$header?>
<body data-type="index">
    <script src="/assets/js/theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
       <?=$top?>
   
        <!-- 风格切换 -->
       <?=$style?>
        <!-- 侧边导航栏 -->
         <?=$left_nav?>
        <!-- 内容区域 -->
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
                                <form class="am-form tpl-form-line-form" id="form" action="<?=$action?>" method="post">
                                 <input name="id" value="<?=$items['id']?>"  type="hidden">
                                 <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                             <small><?=$items['username']?></small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" value="<?=$items['title']?>" name="title" placeholder="请输入标题文字">
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">宣传图片 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <a href="javascript::" id="doc-prompt-toggle" class="imgage" >
                                                <?php if($items['image']): ?>
                                                   <?php foreach($items['image'] as $k => $val):?>
                                                <img src="<?=$val['image']?>" class="tpl-table-line-img" imgid="<?=$val['id']?>" alt="">
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
                                        <label for="user-name" class="am-u-sm-3 am-form-label">个人介绍 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                       <textarea class="" rows="5" name="content" id="doc-ta-1"><?=$items['content']?></textarea>
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
<div class="am-modal am-modal-prompt" tabindex="-1" id="my-prompt">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">图片选择</div>
    <div class="am-modal-bd">
         <?php foreach ($imagelist['imagebox'] as $key=>$v): ?>
            <div class="imagediv"><li class="idimage"><img src="<?=$v['image']?>" class="imagelist"  imageid="<?=$v['id']?>" alt="">
            <label class= "product-buyer-name">
            <input type="checkbox"  dataid="<?=$v['id']?>"  name="path" dataurl="<?=$v['image']?>" />
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

<style type="text/css">
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
</style>

<script>
var index,src,imageid,vsrc,videoid;
$(function() {
  $('.am-form-file').on('click', function() {
        index = $(this).index();    
    $('#my-prompt').modal({
      relatedTarget: this,
      //  onConfirm: function(e) {

      // },
      // onCancel: function(e) {
      //   alert('不想说!');
      // }
    });
  });
});

var path = $('[name="path"]');
    path.change(function () {
       if(this.checked && path.filter(':checked').length > 3){this.checked = false ;alert("只能选三张图片!");} 
    })
$('.am-modal-btn').on('click',function(){
    var imageurl="",imageid="";
    $("input:checkbox[name='path']:checked").each(function() { // 遍历name=test的多选框
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
    var img1 = '<img src=\"';
    var img2 = '\" class=\"tpl-table-line-img\" imgid=\"';
    var img3 = '\" alt=\"\">';
    $.each(newimgarr,function(i,t){
        newhtml +=img1+i+img2+t+img3;
    });
   $('#doc-prompt-toggle').html(newhtml);
});
$(function(){
    $('.submit').on('click',function(){
    var alts="";
    var oUl=$("#doc-prompt-toggle");
    var olis=oUl.children() ;
    for(var i=0;i<olis.length;i++){
    var alt=olis[i];
    alts += $(alt).attr('imgid')+",";
    }
    alts=alts.substring(0,alts.length-1);
    $('#input-image').val(alts);
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
            msg(res.msg);
            history.back();
            }else{
            msg(res.msg);
            }
        },
        })
    })
    })
</script>