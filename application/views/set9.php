<div class="edit-box edit-box-info">
	<div class="edit-carousel edit-images">
	  <div class="edit-shop-header">
	  	<h3>标题栏设置</h3>
	  </div>
		<div class="edit-shop-content">
		  <form class="ivu-form ivu-form-label-right">
		    <div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:70px">标题内容</label>
		      <div class="ivu-form-item-content" style="margin-left: 70px;">
		      	<div class="ivu-input-wrapper ivu-input-type" style="width:340px;" >
		      	 <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
		      	 <input type="hidden" value="<?=$dt?>" name="dt">
		      	 <input type="hidden" value="<?=$sid?>" name="sid">
		      	 <input autocomplate="off" spellcheck="false" type="text" placeholder="标题栏" maxlength="15" class="ivu-input" name="title" value="<?php if(!empty($set_info)){ echo $set_info['title']; }else{echo '标题栏';} ?> ">
		      	</div>
		        <p class="tit">最多可输入15个字</p>
		      </div>
		    </div>
		  	<div class="ivu-form-item ivu-sub" style="margin-left: 70px;">
		      	 <input type="button" value="提交" class="tit_sub info_sub">
		    </div>
		  </form>
		</div>
	</div>
</div>
<script>
    $('.tit_sub').click(function(){
    	var dt = $('[name=dt]').val();
    	var sid = $('[name=sid]').val();
    	var title = $('[name=title]').val();
    	var nurl = "<?=site_url('website/homepage/sub'); ?>";
    	$.post(nurl,{dt:dt,sid:sid,title:title},function(data){
    		if(data){
    			$('.edit-coms > .edit-content').html('');
    			$.each(data.tarr,function(index,item){
                $('.edit-coms > .edit-content').append(item);
    			})
    		}
        },"json");
    })
</script>