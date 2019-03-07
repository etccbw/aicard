<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/cropper.min.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/ImgCropping.css')?>"/>
<script src="<?php echo base_url('public/js/cropper.min.js')?>"></script>
<div class="edit-box edit-box-info">
	<div class="edit-carousel edit-images">
	  <div class="edit-shop-header">
	  	<h3>管理团队</h3>
	  </div>
		<div class="edit-shop-content">
		  <form class="ivu-form ivu-form-label-right">
		    <div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:70px">标题：</label>
		      <div class="ivu-form-item-content" style="margin-left: 70px;">
		      	 <input type="hidden" value="<?=$dt?>" name="dt">
		      	 <input type="hidden" value="<?=$sid?>" name="sid">
		      	<div class="ivu-input-wrapper ivu-input-type" style="width:340px;">
		      	 <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
		      	 <input autocomplate="off" spellcheck="false" type="text" placeholder="管理团队" maxlength="15" class="ivu-input" name="title" value="<?php if(!empty($set_info)){ echo $set_info['title']; }else{echo '管理团队';} ?>">
		      	</div>
		      <p class="tit">最多可输入15个字</p>
		      </div>
		    </div>
		    <div class="ivu-form-item">
		      <div class="el-table__header-wrapper el-table">
		      	<table cellspacing="0" cellpadding="0" border="0" class="el-table_header" style="width:450px;">
		      		<tr>
		      		<th colspan="1" rowspan="1" class="is-leaf"> 姓名</th>
		      		<th colspan="1" rowspan="1" class="is-leaf"> 头像</th>
		      		<th colspan="1" rowspan="1" class="is-leaf"> 职位</th>
		      		<th colspan="1" rowspan="1" class="is-leaf"> 状态</th>
		      		<th colspan="1" rowspan="1" class="is-leaf"> 操作</th>
                    </tr>
                  <?php if(!empty($mageinfo)){ foreach ($mageinfo as $v){ ?>  
                  <tr class="el-table_row">
		      		<td colspan="1" rowspan="1" class="is-leaf"> <?=$v['name']?></td>
		      		<td colspan="1" rowspan="1" class="is-leaf"> <img src='<?php echo base_url().$v["pic"];?>' style="height:30px;"></td>
		      		<td colspan="1" rowspan="1" class="is-leaf"> <?=$v['job']?></td>
		      		<td colspan="1" rowspan="1" class="is-leaf"> 
		      		  <div role="switch" class="el-switch <?php if(!empty($set_info)){$idarr = explode(',',$set_info['mageid']);
                $isin = in_array($v['id'],$idarr);
                if($isin){echo 'is-checked';}} ?>">
		      		  	<input type="checkbox" true-value="1" class="el-switch__input" name="news[]" value="<?=$v['id']?>" <?php if(!empty($set_info)){if($isin){echo 'checked="checked"';}} ?>>
		      		  	<span class="el-switch__core">
		      		  	   <span class="el-switch__button"></span>
		      		  	</span>
		      		  </div>
		      		</td>
		      		<td colspan="1" rowspan="1" class="is-leaf"> 
		      		  <div class="el-button-group">
		      		  	<button type="button" class="el-button el-button--default el-button--mini"> <i class="el-icon-edit" nid="<?=$v['id']?>"></i></button>
		      		  	<button type="button" class="el-button el-button--default el-button--mini"><i class="el-icon-delete" nid="<?=$v['id']?>"></i></button>
		      		  </div>
		      		</td>
                    </tr>
                  <?php } ?>
		      	</table>
                  <?php }else{ ?>
		      	</table>
                  <div class="el-table_empty-block" style="width:450px;">
                  	<span class="el-table_empty-text"> 暂无数据</span>
                  </div>
                <?php } ?>
		      </div>
		    </div>
                  <div class="bottom_ctl">
                  	<button type="button" class="el-button el-button--primary el-button--mini" onclick="one()">
                    <span>添加团队</span>
                  	</button>
                  </div>
		  	<div class="ivu-form-item ivu-sub" style="margin-top: 15px;">
		      	 <input type="button" value="提交" class="info_sub">
		    </div>
		  </form>
          <div class="el-dialog__wrapper dialog"  id="fade" style="z-index:2009;display:none;">
		  <div class="el-dialog el-dialog--center" style="width:700px;margin-top:15vh;">
		  	<div class="el-dialog__header">
		  	  <span class="el-dialog__title">添加团队</span>
		  	  <button type="button" aria-label="Close" class="el-dialog__headerbtn">
		  	  	<i class="el-dialog__close el-icon el-icon-close" onclick="two()"></i>
		  	  </button>
		  	</div>
            <div class="el-dialog__body">
		  	<div class="edit-item">
              <form class="el-form demo-ruleForm ivu-form ivu-form-label-right">
		      <div class="ivu-form-item">
		      	<label class="ivu-form-item-label" style="width:75px">头像：</label>
		      	<div class="ivu-form-item-centent" style="margin-left:40px;">
		      	  <div class="ivu-input-wrapper ivu-input-type">
		      	  	<div class="marsk_img etc-download">
		      	  	<img src="<?php echo base_url('public/img/upload.png');?>" style="width:120px;height:120px;display:block;" id="finalImg">
                              <input type="hidden" value="" name="pic">
                              <input type="hidden" name="id" value=''>
		      	  	<div class="marsk">
                     <div class="self_i"><img src="<?php echo base_url('public/img/start.png') ?>" alt>上传图片</div>
                   </div>
		      	  </div>
		      	  	<p class="tip" style="white-space:nowrap;margin-top:4px;">最佳尺寸：500x400px</p>
		      	  </div>
		      	</div>
		      </div>
		        <!--图片裁剪框 start-->
<div style="display: none" class="tailoring-container">
    <div class="black-cloth" onclick="closeTailor(this)"></div>
    <div class="tailoring-content">
            <div class="tailoring-content-one">
                <label title="上传图片" for="chooseImg" class="l-btn choose-btn">
                    <input type="file" accept="image/jpg,image/jpeg,image/png" name="file" id="chooseImg" class="hidden" onchange="selectImg(this)">
                    选择图片
                </label>
                <div class="close-tailoring"  onclick="closeTailor(this)">×</div>
            </div>
            <div class="tailoring-content-two">
                <div class="tailoring-box-parcel">
                    <img id="tailoringImg">
                </div>
                <div class="preview-box-parcel">
                    <p>图片预览：</p>
                    <div class="square previewImg"></div>
                    <!-- <div class="circular previewImg"></div> -->
                </div>
            </div>
            <div class="tailoring-content-three">
                <button class="l-btn cropper-reset-btn">复位</button>
                <button class="l-btn cropper-rotate-btn">旋转</button>
                <button class="l-btn cropper-scaleX-btn">换向</button>
                <a class="l-btn sureCut" id="sureCut">确定</a>
            </div>
        </div>
</div>
<!--图片裁剪框 end-->
		  	<div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:75px">姓名：</label>
		      <div class="ivu-form-item-content" style="margin-left: 75px;">
		      	<div class="ivu-input-wrapper ivu-input-type" style="width:340px;">
		      	 <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
		      	 <div class="el-form-item el-form-item-feedback is-error">
		      	 	<div class="el-form-item_content">
		      	 		<div class="el-input el-input--small" autocomplete="off" spellcheck="false">
                          <input autocomplete="off" placeholder="姓名" size="small" maxlength="15" type="text" row="2" validateevent="true" clearable="true" class="el-input_inner" name="name" value="姓名">
                          <!-- <div class="el-form-item_error">只允许输入数字、“-”、“+”</div> -->
		      	 		</div>
		      	 	</div>
		      	 </div>
		      	</div>
		      </div>
		    </div>

		  	<div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:75px">职位：</label>
		      <div class="ivu-form-item-content" style="margin-left: 75px;">
		      	<div class="ivu-input-wrapper ivu-input-type" style="width:340px;">
		      	 <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
		      	 <div class="el-form-item el-form-item-feedback is-error">
		      	 	<div class="el-form-item_content">
		      	 		<div class="el-input el-input--small" autocomplete="off" spellcheck="false">
                          <input autocomplete="off" placeholder="职位" size="small" maxlength="15" type="text" row="2" validateevent="true" clearable="true" class="el-input_inner" name="job" value="职位">
                          <!-- <div class="el-form-item_error">只允许输入数字、“-”、“+”</div> -->
		      	 		</div>
		      	 	</div>
		      	 </div>
		      	</div>
		      </div>
		    </div>

		  	<div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:75px">简介：</label>
		      <div class="ivu-form-item-content" style="margin-left: 75px;">
		      	<div class="ivu-input-wrapper ivu-input-type" style="width:340px;">
		      	 <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
		      	 <div class="el-form-item el-form-item-feedback is-error">
		      	 	<div class="el-form-item_content">
		      	 		<div class="el-input el-input--small" autocomplete="off" spellcheck="false">
                          <textarea sellcheck="false" placeholder="简介" size="small"  row="4" class="ivu-input" name="info"  style="width:100%;">简介</textarea>
		      	 		</div>
		      	 	</div>
		      	 </div>
		      	</div>
		      </div>
		    </div>
            <div style="text-align:center;">
              	 	<!-- <button type="button" class="el-button el-button--success">
              	 		<span>确认添加</span>
              	 	</button> -->
             <input type="button" name="n_sub" value="确认提交" class="el-button el-button--success add_mageinfo">
            </div>
		</form>
		    </div>
		</div>
	   </div>
	  </div>
	</div>
</div>
<script>
//弹出图片裁剪框
    $(".etc-download").on("click",function () {
        $(".tailoring-container").toggle();
    });

    //图像上传
    function selectImg(file) {
        if (!file.files || !file.files[0]){
            return;
        }
        var reader = new FileReader();
        reader.onload = function (evt) {
            var replaceSrc = evt.target.result;
            //更换cropper的图片
            $('#tailoringImg').cropper('replace', replaceSrc,false);//默认false，适应高度，不失真
        }
        reader.readAsDataURL(file.files[0]);
    }
    //cropper图片裁剪
    $('#tailoringImg').cropper({
        aspectRatio: 1/1,//默认比例
        preview: '.previewImg',//预览视图
        guides: true,  //裁剪框的虚线(九宫格)
        autoCropArea: 0.5,  //0-1之间的数值，定义自动剪裁区域的大小，默认0.8
        movable: false, //是否允许移动图片
        dragCrop: true,  //是否允许移除当前的剪裁框，并通过拖动来新建一个剪裁框区域
        movable: true,  //是否允许移动剪裁框
        resizable: true,  //是否允许改变裁剪框的大小
        zoomable: true,  //是否允许缩放图片大小
        mouseWheelZoom: true,  //是否允许通过鼠标滚轮来缩放图片
        touchDragZoom: true,  //是否允许通过触摸移动来缩放图片
        rotatable: true,  //是否允许旋转图片
        crop: function(e) {
            // 输出结果数据裁剪图像。
        }
    });

    //旋转
    $(".cropper-rotate-btn").on("click",function () {
        $('#tailoringImg').cropper("rotate", 45);
    });
    //复位
    $(".cropper-reset-btn").on("click",function () {
        $('#tailoringImg').cropper("reset");
    });
    //换向
    var flagX = true;
    $(".cropper-scaleX-btn").on("click",function () {
        if(flagX){
            $('#tailoringImg').cropper("scaleX", -1);
            flagX = false;
        }else{
            $('#tailoringImg').cropper("scaleX", 1);
            flagX = true;
        }
        flagX != flagX;
    });


    //裁剪后的处理
    $("#sureCut").on("click",function () {
        if ($("#tailoringImg").attr("src") == null ){
            return false;
        }else{
            var cas = $('#tailoringImg').cropper('getCroppedCanvas');//获取被裁剪后的canvas
            var base64url = cas.toDataURL('image/png'); //转换为base64地址形式
            $("#finalImg").prop("src",base64url);//显示为图片的形式
            //关闭裁剪框
            var pic = $("#finalImg").attr("src");
            $('[name=pic]').val(pic);
            closeTailor();
        }
    });
    //关闭裁剪框
    function closeTailor() {
        $(".tailoring-container").toggle();
    }
$(".marsk_img").hover(function(){
    $(".marsk_img .marsk").css("display","block");
   },function(){
    $(".marsk_img .marsk").css("display","none");
});
 function one(){
            document.getElementById('fade').style.display='block';

        }
 function two(){
        document.getElementById('fade').style.display='none';
    } 

 function Upload(){
        document.getElementById("fileToUpload").click(); 
    }
    $('#fileToUpload').change(function(e){
        var input = $("#fileToUpload");
        var file = input[0].files[0];//获取input上传的文件
        if(!file.name){
            alert("未选择图片");
        }else{
            //高版本浏览器对文件上传路径进行了安全处理，无法直接通过获取input的value进行访问，故转化为获取图片的url进行安全访问
            var url = window.URL.createObjectURL(file);//将上传的文件转化为url
            $("#showpic").attr('src', url);//更新img的src属性
        };
    });

    $('.el-switch').click(function(){
    	if($(this).hasClass('is-checked')){
    		$(this).removeClass('is-checked');
    		$(this).children('input').attr('checked',false);
    	}else{
    		$(this).addClass('is-checked');
    		$(this).children('input').attr('checked',true);
    	}
    })
    $('.el-icon-delete').click(function(){
      var dt = $('[name=dt]').val();
      var sid = $('[name=sid]').val();
    	var id = $(this).attr("nid");
    	var nurl = "<?php echo site_url('website/homepage/del_mage') ?>";
    	$.post(nurl,{dt:dt,sid:sid,id:id},function(data){
           if(data){
            $('.etc-info').html("");
            $('.etc-info').append(data.set);
           	alert('删除成功！')
           }else{
           	alert('删除失败！')
           }
        },'json');
    })
    $('.el-icon-edit').click(function(){
    	var id = $(this).attr("nid");
    	var nurl = "<?php echo site_url('website/homepage/edit_mage') ?>";
    	$.post(nurl,{id:id},function(data){
           if(data){
        document.getElementById('fade').style.display='block';
           	$('[name=id]').val(data.id);
           	$('[name=job]').val(data.job);
           	$('[name=name]').val(data.name);
           	$('#finalImg').attr('src',"<?php echo base_url();?>"+data.pic);
           	$('[name=info]').val(data.info);
           	$('[name=pic]').val(data.pic);
           }
        },"json");
    })
    $('.info_sub').click(function(){
      var dt = $('[name=dt]').val();
      var sid = $('[name=sid]').val();
      var title = $('[name=title]').val();
      var news = new Array();
      $('[checked=checked]').each(function(){
        var src = $(this).val();
        news.push(src);
      })
      if(news==''|| news==null){
        news = '0';
      }
    	var nurl = "<?php echo site_url('website/homepage/mage_sub') ?>";
    	$.post(nurl,{dt:dt,sid:sid,title:title,news:news},function(data){
    		if(data){
    			$('.edit-coms > .edit-content').html('');
    			$.each(data.tarr,function(index,item){
                $('.edit-coms > .edit-content').append(item);
    			})
    		}
        },"json");
    })
    $('.add_mageinfo').click(function(){
      var dt = $('[name=dt]').val();
      var sid = $('[name=sid]').val();
      var name = $('[name=name]').val();
      var job = $('[name=job]').val();
      var info = $('[name=info]').val();
      var pic = $('[name=pic]').val();
      var id = $('[name=id]').val();
      var nurl = "<?php echo site_url('website/homepage/add_mageinfo') ?>";
      $.post(nurl,{dt:dt,sid:sid,name:name,info:info,pic:pic,id:id,job:job},function(data){
        if(data){
          document.getElementById('fade').style.display='none';
          alert('提交成功！');
          $('.etc-info').html("");
          $('.etc-info').append(data.set);
        }else{
          alert('提交失败！');
        }
        },"json");
    })
</script>
