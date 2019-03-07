<div class="edit-box edit-box-info">
	<div class="edit-carousel edit-images">
	  <div class="edit-shop-header">
	  	<h3>公司地址</h3>
	  </div>
		<div class="edit-shop-content">
		  <form class="ivu-form ivu-form-label-right">
		    <div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:74px">标题：</label>
		      <div class="ivu-form-item-content" style="margin-left: 74px;">
		      	 <input type="hidden" value="<?=$dt?>" name="dt">
		      	 <input type="hidden" value="<?=$sid?>" name="sid">
		      	<div class="ivu-input-wrapper ivu-input-type" style="width:340px;">
		      	 <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
		      	 <input autocomplate="off" spellcheck="false" type="text" placeholder="公司地址" maxlength="15" class="ivu-input" name="title" value="<?php if(!empty($set_info)){ echo $set_info['title']; }else{echo '公司地址';} ?>">
		      	</div>
		      <p class="tit">最多可输入15个字</p>
		      </div>
		    </div>
		  	<div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:74px">详细地址：</label>
		      <div class="ivu-form-item-content" style="margin-left: 74px;">
		      	<div class="ivu-input-wrapper ivu-input-type" style="width:340px;">
		      	 <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
		      	<input autocomplate="off" spellcheck="false" type="text" placeholder="请填写公司地址" maxlength="15" class="ivu-input" name="address" value="<?php if(!empty($set_info)){ echo $set_info['address']; }else{echo '请填写公司地址';} ?>">
		      	</div>
		      </div>
		    </div>
		  	<div class="ivu-form-item ivu-sub" style="margin-left: 70px;">
		      	 <input type="button" value="提交" class='info_sub'>
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
    	var address = $('[name=address]').val();
    	var nurl = "<?php echo site_url('website/homepage/sub') ?>";
    	$.post(nurl,{dt:dt,sid:sid,title:title,address:address},function(data){
    		if(data){
    			$('.edit-coms > .edit-content').html('');
    			$.each(data.tarr,function(index,item){
                $('.edit-coms > .edit-content').append(item);
    			})
    		}
        },"json");
    })
</script>