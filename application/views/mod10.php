<div class="sortable-chosen sortable-ghost" data-type="images">
	<div class="edit-coms-item">
		<div class="edit-coms-delete">
		 	<div class="ivu-poptip ivu-poptip-confirm">
		  		<div class="ivu-poptip-rel">
		  		  <a></a>
		  	    </div>
		  	</div>
		</div>
	<?php  if(!empty($mod_info)){
             $p1 = $mod_info['img1'];
             $p2 = $mod_info['img2'];
             $p3 = $mod_info['img3'];
             $p4 = $mod_info['img4'];
             if(!empty($p4)){
               $noPadding = '';
               $disp1 = 'display:none';
               $disp2 = 'display:none';
               $disp3 = 'display:none';
               $disp4 = '';
             }elseif(empty($p4) && !empty($p3)){
               $noPadding = '';
               $disp1 = 'display:none';
               $disp2 = 'display:none';
               $disp3 = '';
               $disp4 = 'display:none';
             }elseif(empty($p4) && empty($p3) && !empty($p2)){
               $noPadding = '';
               $disp1 = 'display:none';
               $disp2 = '';
               $disp3 = 'display:none';
               $disp4 = 'display:none';
             }elseif(empty($p4) && empty($p3) && empty($p2) && !empty($p1)){
               $noPadding = 'noPadding';
               $disp1 = '';
               $disp2 = 'display:none';
               $disp3 = 'display:none';
               $disp4 = 'display:none';
             }  ?>  
		<div class="module-images module_m">
		   <div class="mod-shop-images <?=$noPadding?>">
		 	<div class="view-image">
		 	  <div class="single" style="<?=$disp1?>">
		 	  	<img src="<?php echo base_url().$p1; ?>" class="img">
		 	  </div>
		 	  <div class="sketch-model-3" style="<?=$disp2?>">
		 	  	<div class="item">
		 	  	   <div class="item_d single" style="background:url(<?php echo base_url().$p1; ?>) center center / cover;"></div>
		 	  	</div>
		 	  	<div class="item">
		 	  	   <div class="item_d single" style="background:url(<?php echo base_url().$p2; ?>) center center / cover;"></div>
		 	  	</div>
		 	  </div>
		 	  <div class="sketch-model-l-3" style="<?=$disp3?>">
		 	  	<div class="item left_i">
		 	  	   <div class="item_d" style="background:url(<?php echo base_url().$p1; ?>) center center / cover;"></div>
		 	  	</div>
		 	  	<div class="item right_i">
		 	  	   <div class="item_d" style="background:url(<?php echo base_url().$p2; ?>) center center / cover;"></div>
		 	  	   <div class="item_d" style="background:url(<?php echo base_url().$p3; ?>) center center / cover;"></div>
		 	  	</div>
		 	  </div>
		 	  <div class="sketch-model-4" style="<?=$disp4?>">
		 	  	<div class="item item_2" style="width:163px;">
		 	  	   <div class="item_d" style="background:url(<?php echo base_url().$p1; ?>) center center / cover;"></div>
		 	  	</div>
		 	  	<div class="item item_2" style="width:163px;">
		 	  	   <div class="item_d" style="background:url(<?php echo base_url().$p2; ?>) center center / cover;"></div>
		 	  	</div>
		 	  	<div class="item item_2" style="width:163px;">
		 	  	   <div class="item_d" style="background:url(<?php echo base_url().$p3; ?>) center center / cover;"></div>
		 	  	</div>
		 	  	<div class="item item_2" style="width:163px;">
		 	  	   <div class="item_d" style="background:url(<?php echo base_url().$p4; ?>) center center / cover;"></div>
		 	  	</div>
		 	  </div>
	       <?php }else{ ?>
		 	  <div class="single">
		 	  	<img src="<?php echo base_url('public/img/show1.png'); ?>" class="img">
		 	  </div>
	       <?php } ?>
		 	</div>
		   </div>
		</div>
	</div>
</div>