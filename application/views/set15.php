<div class="edit-box edit-box-info">
	<div class="edit-carousel edit-images">
	  <div class="edit-shop-header">
	  	<h3>电话设置</h3>
	  </div>
		<div class="edit-shop-content">
		  <form class="ivu-form ivu-form-label-right">
		    <div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:75px">标题：</label>
		      <div class="ivu-form-item-content" style="margin-left: 75px;">
		      	 <input type="hidden" value="<?=$dt?>" name="dt">
		      	 <input type="hidden" value="<?=$sid?>" name="sid">
		      	<div class="ivu-input-wrapper ivu-input-type" style="width:340px;">
		      	 <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
		      	 <input autocomplate="off" spellcheck="false" type="text" placeholder="公司电话" maxlength="15" class="ivu-input" name="title" value="<?php if(!empty($set_info)){ echo $set_info['title']; }else{echo '公司电话';} ?>">
		      	</div>
		      <p class="tit">最多可输入15个字</p>
		      </div>
		    </div>
		  	<div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:75px">电话号码：</label>
		      <div class="ivu-form-item-content" style="margin-left: 75px;">
		      	<div class="ivu-input-wrapper ivu-input-type" style="width:340px;">
		      	 <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
		      	 <div class="el-form-item el-form-item-feedback is-error">
		      	 	<div class="el-form-item_content">
		      	 		<div class="el-input el-input--small" autocomplete="off" spellcheck="false">
                          <input autocomplete="off" placeholder="请填写座机号或者手机号" size="small" maxlength="15" type="text" row="2" validateevent="true" clearable="true" class="el-input_inner" name="phone" value="<?php if(!empty($set_info)){ echo $set_info['phone']; }else{echo '0795-XXXXXXXXX';} ?>">
                          <!-- <div class="el-form-item_error">只允许输入数字、“-”、“+”</div> -->
		      	 		</div>
		      	 	</div>
		      	 </div>
		      	</div>
		      </div>
		    </div>
		  	<div class="ivu-form-item ivu-sub" style="margin-left: 70px;">
		      	 <input type="button" value="提交" class="info_sub">
		    </div>
		  </form>
		</div>
	</div>
</div>
<script>
    $('.info_sub').click(function(){
    	var dt = $('[name=dt]').val();
    	var sid = $('[name=sid]').val();
    	var title = $('[name=title]').val();
    	var phone = $('[name=phone]').val();
    	var nurl = "<?php echo site_url('website/homepage/sub') ?>";
    	$.post(nurl,{dt:dt,sid:sid,title:title,phone:phone},function(data){
    		if(data){
    			$('.edit-coms > .edit-content').html('');
    			$.each(data.tarr,function(index,item){
                $('.edit-coms > .edit-content').append(item);
    			})
    		}
        },"json");
    })
</script>