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
    height: 100px;
    width: 100px;
}
.videolist video{
  margin: 5px;
}
.videolist img{
  margin: 5px;
  vertical-align:initial;
}
td img{
    vertical-align:initial;
}
</style>
        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">视频管理</div>
                            </div>
                            <div class="widget-body  am-fr" id="video-list">
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>用户名</th>
                                                <th>视频</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php foreach($items as $v):?>
                                            <tr class="gradeX">
                                                <td><?=$v['username']?></td>
                                                <td >
                                                <?php $i=1; $maxnum = 4; foreach($v['video'] as $k=>$val):?>
                                                <video class="videolist" src="<?=$val?>" controls="controls" height="150px" width="150px"  data-uid="<?=$v['uid']?>"></video>
                                                  <?php  if($i++ > $maxnum){ break;}?>
                                                <?php endforeach?>
                                                 <img  src="/assets/img/del-video.png" data-uid="<?=$v['uid']?>" class="videolist"  >
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
                            <div class="widget-body  am-fr" id="videobox">
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
    //获取视频
    $(document).on('click','.videolist',function(){
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
                $('#video-list').hide();
                $('#videobox').html(res.data.videobox).show();
            }
        })
    })
})
</script>
</html>