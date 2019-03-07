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
td img{
    height: 100px;
    width: 100px;
}
.widget-body-img img{
  height: 120px;
  width: 120px;
  margin: 5px;
}
.border{
  border:5px solid #E9ECF3;
}
</style>
        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">图片管理</div>
                            </div>
                            <div class="widget-body  am-fr"  id="imagelist">
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                </div>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>用户名</th>
                                                <th>图片</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php  foreach($items as $v):?>
                                            <tr class="gradeX">
                                                <td><?=$v['username']?></td>
                                               <td>
                                                 <?php $i=1; $maxnum = 4; foreach($v['image'] as $k=>$val):?>
                                               <img src="<?=$val?>" class="imagelist" data-uid=<?=$v['uid']?>  alt="">
                                               <?php  if($i++ > $maxnum){ break;}?>
                                                <?php endforeach?>
                                                 <a ><img src="/assets/img/del-image.png" data-uid=<?=$v['uid']?>  class="imagelist" ></a>
                                                </td>
                                            </tr>
                                               <?php endforeach?>
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
                             <div class="widget-body  am-fr" id="imagebox">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?=$footer_js?>
</body>
<script type="text/javascript">
$(function() {
    //获取图片
    $(document).on('click','.imagelist',function(){
        var uid = $(this).attr('data-uid')
        console.log(uid);
        var that = $(this);
        $.ajax({
            url:'<?=$url?>',
            type:"post",
            data:{uid:uid},
            dataType:'json',
            success:function(res){
                console.log(res);
                $('#imagelist').hide();
                $('#imagebox').html(res.data.imagebox).show();
            }
        })
    })
})
</script>
</html>