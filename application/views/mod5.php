<div class="sortable-chosen sortable-ghost" data-type="companyteam">
	<div class="edit-coms-item">
		<div class="edit-coms-delete">
		 	<div class="ivu-poptip ivu-poptip-confirm">
		  		<div class="ivu-poptip-rel">
		  		  <a></a>
		  	    </div>
		  	</div>
		</div>
		<div class="module-companyteam module_m">
		   <div class="mod-shop-companyteam">
		 	<div class="title primary_title limit_line"><?php if(!empty($mod_info)){echo $mod_info['title'];}else{ echo '合作伙伴';}?></div>
		 	<div class="infos">
		 	<?php if(!empty($teaminfo)){ foreach($teaminfo as $v){  ?>
		 		<img src="<?php echo base_url($v["pic"]); ?>">
		 		<?php }
		 	     }else{ ?>
		 		<img src="<?php echo base_url('public/img/team.png') ?>">
		 		<img src="<?php echo base_url('public/img/team.png') ?>">
		 		<img src="<?php echo base_url('public/img/team.png') ?>">
		 		<?php } ?>
		 	</div>
		   </div>
		</div>
	</div>
</div>