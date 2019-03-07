<div class="sortable-chosen sortable-ghost" data-type="companyintv">
	<div class="edit-coms-item">
		<div class="edit-coms-delete">
		 	<div class="ivu-poptip ivu-poptip-confirm">
		  		<div class="ivu-poptip-rel">
		  		  <a></a>
		  	    </div>
		  	</div>
		</div>
		<div class="module-companyintv module_m">
		   <div class="mod-shop-companyintv">
		 	<div class="title primary_title limit_line"><?php if(!empty($mod_info)){echo $mod_info['title'];}else{ echo '企业招聘';}?></div>

		 	<?php if(!empty($tvin)){ 
		 		foreach($tvin as $a){ ?>
		 	<div class="items">
		 	  <i class="el-icon-arrow-right"></i>
		 	  <div class="name limit_line"><?= $a['job']?></div>
		 	  <div class="infos" style="padding-left:0px;color:#666;">
		 	  	<div class="info_item limit_line">薪资：<?= $a['salary']?>元</div>
		 	  	<div class="info_item limit_line">经验：<?= $a['experience']?></div>
		 	  	<div class="info_item">学历：<?= $a['degree']?></div>
		 	  </div>
		 	</div>
            <?php }}else{ ?>
		 	<div class="items">
		 	  <i class="el-icon-arrow-right"></i>
		 	  <div class="name limit_line"> 职位</div>
		 	  <div class="infos" style="padding-left:0px;color:#666;">
		 	  	<div class="info_item limit_line">薪资：元</div>
		 	  	<div class="info_item limit_line">经验：</div>
		 	  	<div class="info_item">学历：</div>
		 	  </div>
		 	</div>
            <?php } ?>
		   </div>
		</div>
	</div>
</div>