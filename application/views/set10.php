<link rel="stylesheet" href="<?php echo base_url('public/css/globle.css'); ?>" />
<div class="edit-box edit-box-info">
	<div class="edit-carousel edit-images">
	  <div class="edit-shop-header">
	  	<h3>图片设置</h3>
	  </div>
	  <div class="edit-shop-content">
	   <h3 class="sel">样式选择
        <span>(切换样式将导致当前的内容丢失)</span>
       </h3>
       <div class="chose_box">
        	<div class="etc-items items is-active">
        		<div class="r_style_box"><img src="<?php echo base_url('public/img/spic.png'); ?>" alt=""></div> 
        		<span>单图</span>
        	</div> 
        	<div class="etc-items items">
        		<div class="r_style_box hover_i">
        			<img src="<?php echo base_url('public/img/dpic.gif'); ?>" alt="" class="gif_i" style="display:none;"> 
        			<img src="<?php echo base_url('public/img/a2.fd665ff.png'); ?>" alt="" class="png_i">
        		</div> 
        		<span>滑块图</span>
        	</div> 
        	<div class="etc-items items">
        		<div class="r_style_box"><img src="<?php echo base_url('public/img/thpic.png'); ?>" alt=""></div> 
        		<span>三图</span>
        	</div> 
        	<div class="etc-items items"><div class="r_style_box">
        		<img src="<?php echo base_url('public/img/fpic.png'); ?>" alt=""></div> <span>宫格图</span>
            </div>
        </div> 
        <h3 class="sel">图片编辑
		    <span>(图片大小不超过2M,支持jpg、png格式)</span> 
		    <span style="display: none;">(图片大小不超过2M,支持jpg、png格式，最多可上传1张)</span>
        </h3> 
	  </div>
	  <div class="main_content">
		 <form class="ivu-form ivu-form-label-right" id="uploadForm">
      	  <div class="ivu-form-item">
      		<div class="ivu-form-item-content">
      		  <div class="ivu-input-wrapper ivu-input-type etc-pic">
      			<ul class="swpier-list clearfix m_ul">
      			   <div id="edit-coms1" class="edit-coms1 content">
      				  <div class="edit-content1">
				      	 <input type="hidden" value="<?=$dt?>" name="dt">
				      	 <input type="hidden" value="<?=$sid?>" name="sid">
      				    <li class="drag-handle stick_w active" style="display:block;" onclick="javascript:Upload();"> 
      				    	<img src="<?=base_url('public/img/show-pic.png')?>" alt>
      				      <input type="file" id="picUpload1" accept="image/*" name="pic1" style="display:none;"  multiple="true" >
      				        <div class="mar">
                          <div class="self_i">
                          	<img src="<?=base_url('public/img/start.png'); ?>" alt>上传图片
                          </div>
                      </div>
      				    </li>
      				    <li class="drag-handle stick_w active" style="display:none;" onclick="javascript:Upload2();"> 
      				    	<img src="<?=base_url('public/img/show-pic.png')?>" alt>
      				       <input type="file" id="picUpload2" accept="image/*" name="pic2" style="display:none;"  multiple="true">
	      				       <div class="mar">
	                          <div class="self_i">
	                          	<img src="<?=base_url('public/img/start.png'); ?>" alt>上传图片
	                          </div>
	                     </div>
      				    </li>
      				    <li class="drag-handle stick_w active" style="display:none;" onclick="javascript:Upload3();"> 
      				    	<img src="<?=base_url('public/img/show-pic.png');?>">
      				       <input type="file" id="picUpload3" accept="image/*" name="pic3" style="display:none;"  multiple="true">
	      				      <div class="mar">
	                          <div class="self_i">
	                          	<img src="<?=base_url('public/img/start.png');?>" alt>上传图片
	                          </div>
	                    </div>
      				    </li>
      				    <li class="drag-handle stick_w active" style="display:none;" onclick="javascript:Upload4();"> 
      				    	<img src="<?=base_url('public/img/show-pic.png');?>">
      				       <input type="file" id="picUpload4" accept="image/*" name="pic4" style="display:none;"  multiple="true">
		  				      <div class="mar">
		                      <div class="self_i">
		                      	<img src="<?=base_url('public/img/start.png');?>" alt>上传图片
		                      </div>
		                </div>
      				    </li>
      				</div>
      			   </div> 
      			</ul>
      		  </div>
      	    </div>
          </div>
		  	<div class="ivu-form-item ivu-sub" style="margin-left: 30px;">
		      	 <input type="button" value="提交" onclick="sub_src()" class="info_sub">
		    </div>
        </form> 
      </div>
	</div>
</div>
<script src="<?php echo base_url('public/js/webuploader.min.js'); ?>"></script>
<script src="<?php echo base_url('public/js/diyUpload.js'); ?>"></script>
<script>
$(".edit-content1 li").hover(function(){
    $(this).find('.mar').css("display","block");
   },function(){
    $(this).find('.mar').css("display","none");
});
 function Upload(){
        document.getElementById("picUpload1").click(); 
    }
 function Upload2(){
        document.getElementById("picUpload2").click(); 
    }
 function Upload3(){
        document.getElementById("picUpload3").click(); 
    }
 function Upload4(){
        document.getElementById("picUpload4").click(); 
    }
    //图片大小验证
// function verificationPicFile(file) {
//     var fileSize = 0;
//     var fileMaxSize = 2048;//1M
//     var filePath = file.value;
//     if(filePath){
//         fileSize =file.files[0].size;
//         var size = fileSize / 1024;
//         if (size > fileMaxSize) {
//             alert("文件大小不能大于2M！");
//             file.value = "";
//             return false;
//         }else if (size <= 0) {
//             alert("文件大小不能为0M！");
//             file.value = "";
//             return false;
//         }
//     }else{
//         return false;
//     }
// }
$('.drag-handle input').change(function(e){
        var input = $(this);
        var file = input[0].files[0];//获取input上传的文件
        var fileMaxSize = 2048;//1M
        var filesize = file.size / 1024;
        if(!file.name){
            return false;
            alert("未选择图片");
        }else{
            if(filesize > fileMaxSize){
              alert("文件大小不能大于2M！");
              $(this).val('');
              return false;
            }else if(filesize <= 0){
              alert("文件大小不能为0M！");
              $(this).val('');
              return false;
            }else{
            //高版本浏览器对文件上传路径进行了安全处理，无法直接通过获取input的value进行访问，故转化为获取图片的url进行安全访问
            var url = window.URL.createObjectURL(file);//将上传的文件转化为url
            $(this).siblings('img').attr('src', url);//更新img的src属性
           }
        };
 });

 //文件上传
function sub_src(){
var formData = new FormData($( "#uploadForm" )[0]);
var url = "<?php echo site_url('website/homepage/add_image'); ?>";
 $.ajax({
   url: url ,
   type: 'POST',
   data: formData,
   dataType: "json",
   async: false,
   cache: false,
   contentType: false,
   processData: false,
   success: function (returndata) {
    $('.edit-coms > .edit-content').html('');
      $.each(returndata.tarr,function(index,item){
      $('.edit-coms > .edit-content').append(item);
      })
   },
   error: function (returndata) {
    alert(returndata);
   }
  });
}
$('.hover_i').mouseover(function(){
	$('.png_i').css('display','none');
	$('.gif_i').css('display','block');
})
$(".hover_i").mouseout(function(){
	$('.png_i').css('display','block');
	$('.gif_i').css('display','none');
});
$('.items').click(function(){
	if(!$(this).hasClass('is-active')){
    	$('.items').removeClass('is-active');
    	$(this).addClass('is-active');
	}
})
$('.etc-items:eq(0)').click(function(){
	$('.drag-handle:lt(1)').css('display','block');
	$('.drag-handle:gt(0)').css('display','none');
	$('.drag-handle:gt(0)>img').attr('src','<?=base_url('public/img/show-pic.png')?>');
})
$('.etc-items:eq(1)').click(function(){
	$('.drag-handle:lt(2)').css('display','block');
	$('.drag-handle:gt(1)').css('display','none');
	$('.drag-handle:gt(1)>img').attr('src','<?=base_url('public/img/show-pic.png')?>');
})
$('.etc-items:eq(2)').click(function(){
	$('.drag-handle:lt(3)').css('display','block');
	$('.drag-handle:gt(2)').css('display','none');
	$('.drag-handle:gt(2)>img').attr('src','<?=base_url('public/img/show-pic.png')?>');
})
$('.etc-items:eq(3)').click(function(){
	$('.drag-handle:lt(4)').css('display','block');
	$('.drag-handle:gt(3)').css('display','none');
	$('.drag-handle:gt(3)>img').attr('src','<?=base_url('public/img/show-pic.png')?>');
})
$('.etc-items:eq(4)').click(function(){
	$('.drag-handle:lt(5)').css('display','block');
})

</script>