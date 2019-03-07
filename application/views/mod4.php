<div class="sortable-chosen sortable-ghost" data-type="companymage">
	<div class="edit-coms-item">
		<div class="edit-coms-delete">
		 	<div class="ivu-poptip ivu-poptip-confirm">
		  		<div class="ivu-poptip-rel">
		  		  <a></a>
		  	    </div>
		  	</div>
		</div>
		<div class="module-companymage module_m">
		   <div class="mod-shop-companymage">
		 	<div class="title primary_title limit_line"><?php if(!empty($mod_info)){echo $mod_info['title'];}else{ echo '管理团队';}?></div>
		 	<div class="sm_box">
		 	<?php if(!empty($mg)){ 
		 		foreach($mg as $a){?>
		 	  <div class="sm_md_box">
		 	  	<div class="items">
		 	  	  <div class="b_img" style="background:url(<?php echo base_url().$a['pic']; ?>) center center / cover"></div>
		 	  	  <div class="box_s">
		 	  	  	<div class="name">
		 	  	  	  <p class="s_n"><?=$a['name']?></p>
		 	  	  	  <p> <?=$a['job']?></p>
		 	  	  	</div>
		 	  	  	<div>
		 	  	  		<div class="info_item"><?=$a['info']?> </div>
		 	  	  	</div>
		 	  	  </div>
		 	  	</div>
		 	  </div>
		 	<?php }}else{ ?>
		 	  <div class="sm_md_box single">
		 	  	<div class="items">
		 	  	  <div class="b_img" style="background:url(<?php echo base_url('public/img/show1.png')?>) center center / cover"></div>
		 	  	  <div class="box_s">
		 	  	  	<div class="name">
		 	  	  	  <p class="s_n">姓名</p>
		 	  	  	  <p> 职位</p>
		 	  	  	</div>
		 	  	  	<div>
		 	  	  		<div class="info_item">简介 </div>
		 	  	  	</div>
		 	  	  </div>
		 	  	</div>
		 	  </div>
		 	<?php } ?>
		 	</div>
		   </div>
		</div>
	</div>
</div>