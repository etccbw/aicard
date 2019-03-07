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
<style type="text/css">
.imagelist {
    padding: 3px;
    height: 110px;
    width: 110px;
}
.imagetd{
   height: 120px;
    width: 340px;
}
.wcontent{
    width: 500px;
}
.uwidth{
    width: 40px;
}
.wtitle{
    width: 180px;
}
</style>
        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">产品管理</div>
                            </div>
                            <div class="widget-body  am-fr">
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                </div>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                              <th>用户名</th>
                                              <th>标题</th>
                                              <th>图片</th>
                                              <th>内容</th>
                                          <!--     <th>是否显示</th> -->
                                              <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php foreach($items as $v):?>
                                            <tr>
                                                <td><div class="uwidth"><?=$v['username']?></div></td>
                                                <td><div class="wtitle"><?=$v['title']?></div></td>
                                                <td >
                                                    <div class="imagetd">
                                                    <?php foreach($v['image'] as $k=>$val):?>
                                                    <img src="<?=$val?>" imageid="<?=$k?>" class="imagelist" alt="">
                                                     <?php endforeach?>
                                                     </div>
                                                </td>
                                                <td><div class="wcontent"><?=$v['content']?></div></td>
                                              <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">

                                                      <a href="/admin/product/is_audited/<?=$v['id']?>" class="del">
                                                            <i class="am-icon-cog"></i><?php if($v['is_audited']==0){echo "未审核";}else{echo "已审核";}?>
                                                        </a>
                                                        <a href="/admin/product/productedit/<?=$v['id']?>">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="/admin/product/productdel/<?=$v['id']?>" class="tpl-table-black-operation del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                               <?php endforeach?>
                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <?=$paginations?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?=$footer_js?>
<script type="text/javascript">
  var index,src,imageid,vsrc,videoid;
$(function() {
  $('.tpl-table-line-img').on('click', function() {
        index = $(this).index();    
    $('#my-prompt').modal({
      relatedTarget: this,
    });
  });
});
$(".imagelist").on('click',function(){
    src=$(this).attr('src');
    imageid = $(this).attr('imageid');
});
$('.am-modal-btn').on('click',function(){
    $('.tpl-table-line-img').eq(index).attr('src',src);
    $('.tpl-table-line-img').eq(index).attr('imgid',imageid);
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
            if(res.code === 1){
            msg(res.msg);
            location.reload();
            }else{
            msg(res.msg);
            }
        },
        });
});
});

</script>
<script type="text/javascript">
    $('.del').on('click',function(e){
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
         console.log("res");
        location.reload();
    }
      }
  })
})
</script>
</body>

</html>