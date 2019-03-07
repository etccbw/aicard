<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
	 <link rel="stylesheet" href="<?php echo base_url('public/css/index.css'); ?>" />
	 <link rel="stylesheet" href="<?php echo base_url('public/css/app.css'); ?>" />
    <script src="<?php echo base_url('public/js/jquery-2.1.1.js'); ?>"></script>
	<script src="<?php echo base_url('public/js/short.js'); ?>"></script>
</head>
<body>   
           	<div class="design-content">
                       <div id="edit-coms" class="edit-coms">
                       	<div class="edit-content" style="position: relative;min-height:685px;">
       	             <?php if(!empty($tarr)){
       	  	            foreach ($tarr as $t) {
       	  	              echo $t;
       	  	             } 
       	  	            }else{ echo $mod; } ?>
                       	</div>
                       </div>
                  	</div>
</body>
</html>