<!DOCTYPE html>
<html lang="en">

<?=$header?>

<body data-type="index">
    <script src="../../assets/js/theme.js"></script>
    <script src="../../assets/js/amazeui.min.js"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
       <?=$top?>
   
        <!-- 风格切换 -->
       <?=$style?>
        <!-- 侧边导航栏 -->
         <?=$left_nav?>
<style type="text/css">
.listimg{
    width: 60px;
    height: 60px;
}
</style>
        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">组织架构</div>
                                    <div class="am-g">
                                      <div class="am-u-sm-3">
                                       <ul class="am-list admin-sidebar-list" id="collapase-nav-1">
                                            <li class="am-panel">
                                                <a data-am-collapse="{parent: '#collapase-nav-1', target: '#user-nav'}" class="item" data-id="<?=$item['id']?>">
                                                  <i class="am-icon-users am-margin-left-sm"></i> <?=$item['name']?> <i class="am-icon-angle-right am-fr am-margin-right"></i>
                                              </a>
                                            </li>
                                          </ul> 

                                          <ul id="demo">
                                            <item
                                              class="item"
                                            </item>
                                          </ul>


                                    </div>
                                    <div class="am-u-sm-9">
                                        <div class="am-panel  am-panel-secondary" id="partment"></div>
                                        <div class="am-panel  am-panel-secondary" id="optbox"></div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="am-modal am-modal-prompt" tabindex="-1" id="my-prompt">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">增加部门</div>
    <div class="am-modal-bd">
      部门：
      <input type="text" class="am-modal-prompt-input">
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span class="am-modal-btn" data-am-modal-confirm>提交</span>
    </div>
  </div>
</div>

<div class="am-modal am-modal-prompt" tabindex="-1" id="my-upid">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">修改部门</div>
    <div class="am-modal-bd">
      部门：
      <input type="text" class="am-modal-prompt-input">
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span class="am-modal-btn" data-am-modal-confirm>提交</span>
    </div>
  </div>

</div><div class="am-modal am-modal-prompt" tabindex="-1" id="my-delid">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">删除部门</div>
    <div class="am-modal-footer">
      <span class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span class="am-modal-btn" data-am-modal-confirm>确定</span>
    </div>
  </div>
</div>
<script>

$(function() {
    //获取树
    $(document).on('click','.item',function(){
        var id = $(this).attr('data-id')
        var that = $(this);
        $.ajax({
            url:'<?=$url?>',
            type:"post",
            data:{id:id},
            dataType:'json',
            success:function(res){
                $('.item').removeClass('active')
                that.addClass('active')
                that.next('ul').remove();
                that.after(res.data.tree)
                $('#partment').html(res.data.partment).show();
                $('#optbox').hide();
 
            }
        })
    })
});
</script>
<style type="text/css">
body {
  font-family: Menlo, Consolas, monospace;
  color: #444;
}
.item {
  cursor: pointer;
}
.bold {
  font-weight: bold;
}
ul {
  padding-left: 1em;
  line-height: 1.5em;
  list-style-type: dot;
}
.active{background-color: #e9e9e9;color:#025986}
#optbox{display: none}
</style>


