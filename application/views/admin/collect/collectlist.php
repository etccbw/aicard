<!DOCTYPE html>
<html lang="en">
<?=$header?>

<body data-type="index">
    <script src="../../assets/js/theme.js"></script>
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
</style>
        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">数据统计</div>
                            </div>
                            <div class="widget-body  am-fr">
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                </div>
                                 <form action="" method="get">
                              
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" name="sch" class="am-form-field " value="<?=($sch?$sch:'')?>">
                                        <span class="am-input-group-btn">
                                            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit"></button>
                                        </span>
                                    </div>
                                </div>
                                </form>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                            <th>用户名</th>
                                            <?php foreach($comment as $v):?>
                                            <th><?=$v['comment']?></th>
                                            <?php endforeach?>
                                            <th>汇总</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach($items as $k =>$v):?>
                                            <tr>
                                              <td><?=$k?></td>
                                              <?php foreach($comment as $val):?>
                                                 <td class="am-text-middle">
                                                    <div >
                                                    <div><?php if(!empty($v[$val['name']])){?>
                                                        <a href="../../admin/collect/getuserlist?m=<?=$val['id']?>&id=<?=$v['id']?>"><?=$v[$val['name']]?></a>
                                                        <?php }?>
                                                    </div>
                                                    </div>
                                                </td>
                                              <?php endforeach?>
                                              <td ><?=array_sum($v)-$v['id']?>
                                              </td>
                                            </tr>
                                          <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">
                                    <div class="am-fr">
                                        <?=$paginations?>
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
   $(function(){
    $('.submit').on('click',function(){
        console.log(new FormData($('#form')[0]));
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
        })
    })
    })
</script>
