<div class="sortable-chosen sortable-ghost" data-type="companylink">
	<div class="edit-coms-item">
		<div class="edit-coms-delete">
		 	<div class="ivu-poptip ivu-poptip-confirm">
		  		<div class="ivu-poptip-rel">
		  		  <a></a>
		  	    </div>
		  	</div>
		</div>
		<div class="module-companylink module_m">
		   <div class="mod-shop-companylink">
		 	<div class="title primary_title limit_line"><?php if(!empty($mod_info)){echo $mod_info['title'];}else{ echo '联系我们';}?></div>
		 	<div class="items">
		 	  <div class="name">
		 	  	<p class="s_n"><?php if(!empty($mod_info)){echo $mod_info['person'];}?></p>
		 	  	<p> <?php if(!empty($mod_info)){echo $mod_info['job'];}else{echo '职位';}?></p>
		 	  	<img src="<?php if(!empty($mod_info)){echo base_url($mod_info['pic']);}else{ echo base_url('public/img/connect.png');}?>">
		 	  </div>
		 	  <div class="infos">
		 	  	<div class="info_item">手机:<?php if(!empty($mod_info)){echo $mod_info['phone'];}?></div>
		 	  	<div class="info_item">邮箱:<?php if(!empty($mod_info)){echo $mod_info['email'];}?></div>
		 	  </div>
		 	</div>
		   </div>
		</div>
	</div>
</div>