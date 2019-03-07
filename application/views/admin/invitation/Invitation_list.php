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
.listimg {
    height: 100px;
    width: 100px;
}
</style>
        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">邀请函管理</div>
                            </div>
                            <div class="widget-body  am-fr">
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>发起人</th>
                                                <th>被邀请人</th>
                                                <th>联系方式</th>
                                                <th>所在单位</th>
                                                <th>职务</th>
                                                <th>考察时间</th>
                                                <th>备注</th>
                                                <th>发起时间</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($items as $v):?>
                                            <tr class="gradeX">
                                                <td><?=$v['uname']?></td>
                                                <td><?=$v['username']?></td>
                                                <td><?=$v['tel']?></td>
                                                <td><?=$v['company']?></td>
                                                <td><?=$v['duties']?></td>
                                                <td><?=$v['departure_time']?></td>
                                                <td><?=$v['remarks']?></td>
                                                <td><?=$v['creation_time']?></td>
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
        history.back();
    }
      }
  })
})
</script>

</body>

</html>