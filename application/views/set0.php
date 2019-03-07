<link rel="stylesheet" href="<?php echo base_url('public/css/globle.css'); ?>" />
<div class="edit-box edit-box-info">
	<div class="edit-carousel edit-images">
	  <div class="edit-shop-header">
	  	<h3>轮播图设置</h3>
	  </div>
		<div class="edit-shop-content">
		  <form class="ivu-form ivu-form-label-right">
		  	<div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:70px">图片：</label>
		      <div class="ivu-form-item-content" style="margin-left: 70px;">
		      	<div class="ivu-input-wrapper ivu-input-type" style="width:340px;">
		      	 <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
		      	 <input type="hidden" value="<?=$dt?>" name="dt">
		      	 <input type="hidden" value="<?=$sid?>" name="sid">
				<div style="">
				<ul class="upload-ul clearfix">
				    <li class="upload-pick">
				        <div class="webuploader-container clearfix" id="goodsUpload"></div>
				    </li>
				</ul>
				</div>
		      	</div>
		      	 <p class="tip"> (图片大小不超过2M,支持jpg、png格式，最多可上传10张)</p>
		      </div>
		    </div>
		  	<div class="ivu-form-item ivu-sub" style="margin-left: 70px;">
		      	 <input type="button" value="提交" onclick="sub_src()" class="info_sub">
		    </div>
		  </form>
		</div>
	</div>
</div>
<script src="<?php echo base_url('public/js/webuploader.min.js'); ?>"></script>
<script src="<?php echo base_url('public/js/diyUpload.js'); ?>"></script>
<script>
$(function(){

	//上传图片
	var $tgaUpload = $('#goodsUpload').diyUpload({
		url:'uploadFilePath',
		success:function( data ) { },
		error:function( err ) { },
		buttonText : '',
		accept: {
			title: "Images",
			extensions: 'gif,jpg,jpeg,bmp,png'
		},
		thumb:{
			width:400,
			height:400,
			quality:100,
			allowMagnify:true,
			crop:true,
			type:"image/jpeg"
		}
	});
});
function sub_src(){
var picarr = new Array();
$(".upload-ul img").each(function() { 
        var src=$(this).attr("src");
        picarr.push(src);
 });
var url = "<?php echo site_url('website/homepage/add_carousel'); ?>";
var dt = $('[name=dt]').val();
var sid = $('[name=sid]').val();
  $.post(url,{dt:dt,sid:sid,picarr:picarr},function(data){
           if(data.tarr){
           	 $('.edit-coms > .edit-content').html('');
             $.each(data.tarr,function(index,item){
             $('.edit-coms > .edit-content').append(item);
             })
           }else{
           	alert('请上传图片！');
           }
        },'json');
}
</script>