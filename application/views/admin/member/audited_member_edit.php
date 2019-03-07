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
                                
                                <form class="am-form tpl-form-border-form tpl-form-border-br " >
                                <input name="id" value="<?=$items['id']?>"  type="hidden">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text"  name="username" value="<?=$items['username']?>" class="tpl-form-input" id="user-name" placeholder="请输入名称"  disabled="true" required>
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
                                            <input type="text"  name="company" value="<?=$items['company']?>" class="tpl-form-input"  disabled="true"  id="user-name" placeholder="请输入名称" required>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">职 责 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                             <input type="text"  name="duties" value="<?=$items['duties']?>" class="tpl-form-input"  disabled="true"  id="user-name" placeholder="请输入名称" required>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">联系电话 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                          <input type="text"  name="tel" value="<?=$items['tel']?>" class="tpl-form-input" id="user-name"  disabled="true"  placeholder="请输入名称" required>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">邮 箱 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                             <input type="text"  name="email" value="<?=$items['email']?>" class="tpl-form-input" id="user-name"  disabled="true" required>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">公司地址 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                           <input type="text"  name="address" value="<?=$items['address']?>" class="tpl-form-input" id="user-name"  disabled="true"  placeholder="请输入名称" required>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">个人介绍 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                       <textarea class="" rows="5" name="introduce"  disabled="true"  id="doc-ta-1"><?=$items['introduce']?></textarea>
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
                                        <a href="/admin/member/is_audited/<?=$items['id']?>" class="tpl-table-black-operation is_audited">
                                       <i ></i>审核</a>
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
<style type="text/css">

</style>
<script>
    $('.is_audited').on('click',function(e){
  e.preventDefault();
  var self = $(this);
  $.ajax({
      url:self.attr('href'),
      dataType:'json',
      error:function(e,i,n){
      console.log(e);
      },
      success:function(res){
    if(res === true){
       url = "/admin/member/audited";
       window.location.replace(url);
    }
      }
  })
})

</script>