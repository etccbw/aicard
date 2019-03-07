<div class="edit-box edit-box-info">
	<div class="edit-carousel edit-images">
	  <div class="edit-shop-header">
	  	<h3>占位符设置</h3>
	  </div>
		<div class="edit-shop-content">
		  <form class="ivu-form ivu-form-label-right">
		  	<div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:55px">高度：</label>
		      <div class="ivu-form-item-content" style="margin-left: 55px;">
		      	<div class="ivu-input-wrapper ivu-input-type" style="width:355px;">
		      	 <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
		      	 <input autocomplate="off" spellcheck="false" placeholder="10" maxlength="20" class="ivu-input" name="height">
		      	 <input type="hidden" value="<?=$dt?>" name="dt">
		      	 <input type="hidden" value="<?=$sid?>" name="sid">
		      	</div>
		      	<p class="tit">默认为10px，最大可输入1000</p>
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
    	var height = $('[name=height]').val();
    	var nurl = "<?php echo site_url('website/homepage/sub') ?>";
    	$.post(nurl,{dt:dt,sid:sid,height:height},function(data){
    		if(data){
    			$('.edit-coms > .edit-content').html('');
    			$.each(data.tarr,function(index,item){
                $('.edit-coms > .edit-content').append(item);
    			})
    		}
        },"json");
    })
</script>