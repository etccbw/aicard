<div class="sortable-chosen sortable-ghost" data-type="companynews">
	<div class="edit-coms-item">
		<div class="edit-coms-delete">
		 	<div class="ivu-poptip ivu-poptip-confirm">
		  		<div class="ivu-poptip-rel">
		  		  <a></a>
		  	    </div>
		  	</div>
		</div>
		<div class="module-companynews module_m">
		   <div class="mod-shop-companynews">
		 	<div class="title primary_title limit_line"><?php if(!empty($mod_info)){echo $mod_info['title'];}else{ echo '企业资讯';}?></div>
		 	<?php if(!empty($newsin)){ 
		 		foreach($newsin as $a){?>
             
		 	<div class="box">
		 		<div class="img" style="background:url(<?php echo base_url().'/'.$a['pic'];?>) center center / cover;"></div>
		 	 <div class="info">
		 		<div class="title"><?=$a['tit']?></div>
		 		<div class="time"><?=$a['time']?></div>
		 	</div>
		 	</div>

		 	<?php }}else{ ?>
		 	<div class="box">
		 		<div class="img" style="background:url(<?php echo base_url('public/img/pic.jpg')?>) center center / cover;"></div>
		 	 <div class="info">
		 		<div class="title">企业资讯</div>
		 		<div class="time">发布时间</div>
		 	</div>
		 	</div>
		 	<?php } ?>
		   </div>
		</div>
	</div>
</div>