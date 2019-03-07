<link rel="stylesheet" type="text/css" href="<?=base_url('public/css/style.css')?>">
<script type="text/javascript" src="<?=base_url('public/js/highlight.pack.js')?>"></script>
<script type="text/javascript" src="<?=base_url('public/js/jquery.terseBanner.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('public/js/script.js')?>"></script>
<div class="sortable-chosen sortable-ghost" data-type="carousel">
	<div class="edit-coms-item">
		<div class="edit-coms-delete">
		 	<div class="ivu-poptip ivu-poptip-confirm">
		  		<div class="ivu-poptip-rel">
		  		  <a></a>
		  	    </div>
		  	</div>
		</div>
		<div class="module-carousel module_m">
		   <div class="mod-shop-carousel">
		   	<div class="block">
		   	  <div class="el-carousel__container" style="height:348px;">
				<div class="main">
					<div class="container animation" id="anchor-3">
						<div class="banner" id="animation">
							<ul><?php if(!empty($mod_info)){
								$picarr = array();
								$picarr = explode(',',$mod_info['picstr']);
								foreach($picarr as $m){  ?>
								<li><img src="<?=base_url().$m ?>" style="height:348px;width:372px;"></li>
								<?php }}else{ ?>
								<li><img src="<?=base_url('public/img/show1.png')?>"></li>
								<li><img src="<?=base_url('public/img/show1.png')?>"></li>
								<li><img src="<?=base_url('public/img/show1.png')?>"></li>
								<li><img src="<?=base_url('public/img/show1.png')?>"></li>
								<li><img src="<?=base_url('public/img/show1.png')?>"></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
		   	  </div>
		   	 </div>
		   </div>
		</div>
	</div>
</div>
<script>
</script>