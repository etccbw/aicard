  
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
  <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">详情统计</div>
                            </div>
                            <div class="widget-body  am-fr">
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>查看人</th>
                                                <th>时间</th>
                                                <th>被查看人</th>
                                                <th>位置</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach($items as $v):?>
                                            <tr class="gradeX">
                                                <td><?=$v['pname']?></td>
                                                <td><?=date("Y-m-d H:i",$v['opentime'])?></td>
                                                <td><?=$v['uname']?></td>
                                                <td><?=$v['comment']?></td>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?=$footer_js?>