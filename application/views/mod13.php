<div class="sortable-chosen sortable-ghost" data-type="video">
	<div class="edit-coms-item">
		<div class="edit-coms-delete">
		 	<div class="ivu-poptip ivu-poptip-confirm">
		  		<div class="ivu-poptip-rel">
		  		  <a></a>
		  	    </div>
		  	</div>
		</div>
		<div class="module-video module_m">
		    <div class="mod-shop-video">
			   <div class="view-video" style="background:url(<?php if(!empty($mod_info)){echo base_url().$mod_info['pic'];}else{ echo base_url('public/img/video.png');}?>) center center / cover;">
			   	 <img src="<?php echo base_url('public/img/on.png') ?>">
			   	 <audio src="<?php if(!empty($mod_info)){echo $mod_info['video'];}?>"></audio>
			   </div>
			</div>
		</div>
	</div>
</div>
<script>
$('.view-video').click(function(){
 var audio = $(this).find('audio'); 
  if(audio.paused){                 
      audio.play();//audio.play();// 这个就是播放  
  }else{
   audio.pause();// 这个就是暂停
  }
})
</script>