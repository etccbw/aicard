<div class="widget am-cf" id="memberbox">
        <div class="widget-head am-cf">
            <div class="widget-title am-fl">部门 <?=$member['department']?></div>
            <div class="widget-function am-fr">
                <a href="javascript:;" class="am-icon-cog"></a>
            </div>
        </div>
        <div class="widget-body am-fr">
            <form class="am-form tpl-form-line-form" id="form" action="<?=$action?>" method="post">
                <input name="id" value="<?=$member['id']?>"  type="hidden">
             <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-2 am-form-label">姓名 <span class="tpl-form-line-small-title">User name</span></label>
                    <div class="am-u-sm-10">
                         <input type="text" class="tpl-form-input" value="<?=$member['username']?>" name="username" placeholder="请输入姓名">
                    </div>
                </div>
                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-2 am-form-label">职位 <span class="tpl-form-line-small-title">Position</span></label>
                    <div class="am-u-sm-10">
                        <input type="text" class="tpl-form-input" value="<?=$member['position']?>" name="position" placeholder="请输入职位">
                        <small></small>
                    </div>
                </div>

              <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-2 am-form-label">手机 <span class="tpl-form-line-small-title">Phone</span></label>
                    <div class="am-u-sm-10">
                        <input type="text" class="tpl-form-input" value="<?=$member['tel']?>" name="tel" placeholder="请输入手机号">
                    </div>
                </div>
                <div class="am-form-group">
                    <div class="am-u-sm-2 am-u-sm-push-3">
                        <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success submit">提交</button>
                    </div>
                    <div class="am-u-sm-10 am-u-sm-push-3">
                        <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success cancel">返回</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<script>
    $(function(){
//    var $modal = $('#opt_modal');
//        $modal.modal();
	$('.submit').on('click',function(){
	    $.ajax({
		url:$("#form").attr('action'),
		dataType:'json',
		data:new FormData($('#form')[0]),
		type:'post',
		processData: false,
		contentType: false,
		error:function(){},
		success:function(res){
		    if(res.code === '0'){
                        alert('修改成功')
			//msg(res.msg);
			//location.reload();
		    }else{
                        alert('添加失败')
			//msg(res.msg);
		    }
		},
	    })
	})
$('.cancel').on('click',function(){
    $('#optbox').hide();
    $('#partment').show();
})
    })
</script>