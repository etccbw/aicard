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
                                <div class="widget-title  am-cf">名片管理</div>
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
                            <div class="widget-body  am-fr">
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>用户名</th>
                                                <th>头像</th>
                                                <th>所在单位</th>
                                                <th>联系电话</th>
                                                <th>邮箱</th>
                                                <th>地址</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($items as $v):?>
                                            <tr class="gradeX">
                                                <td><?=$v['username']?></td>
                                                <td><img class="listimg"  src="<?=$v['avatar']?>"></td>
                                                <td><?=$v['company']?></td>
                                                <td><?=$v['tel']?></td>
                                                <td><?=$v['email']?></td>
                                                <td><?=$v['address']?></td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                    
                                                        <a href="/admin/member/editcard/<?=$v['id']?>">
                                                            <i class="am-icon-pencil"></i> 编辑 
                                                        </a>

                                                        <a href="/admin/member/del/<?=$v['id']?>" class="tpl-table-black-operation del">
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