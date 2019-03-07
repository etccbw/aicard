<div class="widget am-cf" id="departmentbox">
        <div class="widget-head am-cf">
            <div class="widget-title am-fl"></div>
            <div class="widget-function am-fr">
                <a href="javascript:;" class="am-icon-cog"></a>
            </div>
        </div>
        <div class="widget-body am-fr">
            <form class="am-form tpl-form-line-form" id="form" action="<?=$action?>" method="post">
             <input name="f_id" value="<?=$department['id']?>"  type="hidden">
             <input name="company_id" value="<?=$department['company_id']?>"  type="hidden">
             <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-2 am-form-label">部门名称 <span class="tpl-form-line-small-title">department</span></label>
                    <div class="am-u-sm-10">
                         <input type="text" class="tpl-form-input" value="" name="name" placeholder="请输入部门名称">
                    </div>
                </div>
                <div class="am-form-group">
                    <div class="am-u-sm-2 am-u-sm-push-3">
                        <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success submit">提交</button>
                    </div>
                    <div class="am-u-sm-10 am-u-sm-push-3">
                        <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success cancel">取消</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<script>
    $(function(){

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
		    if(res.code === "0"){
                        alert('添加成功')
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