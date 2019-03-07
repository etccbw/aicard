<div class="edit-box edit-box-info">
	<div class="edit-carousel edit-images">
	  <div class="edit-shop-header">
	  	<h3>文本设置</h3>
	  </div>
		<div class="edit-shop-content">
		  <form class="ivu-form ivu-form-label-right">
		  	<div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:75px">文本内容：</label>
		      <div class="ivu-form-item-content" style="margin-left: 70px;">
		      	<div class="ivu-input-wrapper ivu-input-type">
		      	 <input type="hidden" value="<?=$dt?>" name="dt">
		      	 <input type="hidden" value="<?=$sid?>" name="sid">
		      	 <textarea autocomplate="off" placeholder="请填写内容" spellcheck="false" row="20" maxlength="1000" class="ivu-input etc-text" name="info"><?php if(!empty($set_info)){ echo $set_info['info']; }else{echo '请填写内容';}  ?></textarea>
		         <span class="limit_len">5/1000</span>
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
    	var info = $('[name=info]').val();
    	var nurl = "<?php echo site_url('website/homepage/sub') ?>";
    	$.post(nurl,{dt:dt,sid:sid,info:info},function(data){
    		if(data){
    			$('.edit-coms > .edit-content').html('');
    			$.each(data.tarr,function(index,item){
                $('.edit-coms > .edit-content').append(item);
    			})
    		}
        },"json");
    })
</script>