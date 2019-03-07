
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/cropper.min.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/ImgCropping.css')?>"/>
<script src="<?php echo base_url('public/js/jquery-2.1.1.js')?>"></script>
<script src="<?php echo base_url('public/js/cropper.min.js')?>"></script>
<div class="edit-box edit-box-info">
	<div class="edit-carousel edit-images">
	  <div class="edit-shop-header">
	  	<h3>视频设置</h3>
	  </div>
		<div class="edit-shop-content">
		  <form class="ivu-form ivu-form-label-right">
		    <div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:74px">视频地址：</label>
		      <div class="ivu-form-item-content" style="margin-left: 74px;">
		      	<div class="ivu-input-wrapper ivu-input-type" style="width:340px;">
                 <input type="hidden" value="<?=$dt?>" name="dt">
                 <input type="hidden" value="<?=$sid?>" name="sid">
		      	  <textarea autocomplete="off" spellcheck="false" placeholder="支持mp4格式，请填写视频通用地址，如 http://www.helloworld.com/hello.mp4" rows="4" class="ivu-input" name="video"><?php if(!empty($set_info)){echo $set_info['video'];}?></textarea>
		      	</div>
		      <a target="_blank" href="https://business.aijiatui.com/bm/guide_v/Guide_video.html">如何正确填写视频地址？请看这里</a>
		      </div>
		    </div>
		  	<div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:74px">视频封面：</label>
		      <div class="ivu-form-item-content" style="margin-left: 74px;">
		      	<div class="ivu-input-wrapper ivu-input-type" style="width:340px;">
		      	<div class="marsk_img">
		      	   <img src="<?php if(!empty($set_info)){echo base_url().$set_info['pic'];}else{echo base_url('public/img/show1.png');}?>" style="width: 120px; height: 120px; display: block;"  id="finalImg">
		      	    <input type="hidden" value="<?php if(!empty($set_info)){echo $set_info['pic'];}?>" name="pic">
		      	   <div class="marsk">
		      	     <div class="self_i"><img src="<?php echo base_url('public/img/start.png') ?>" alt>上传图片</div>
		      	   </div>
		      	</div>
		      	</div>
		       <p class="tip">最佳尺寸：500x400px</p>
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
		  	<div class="ivu-form-item ivu-sub" style="margin-left: 74px;">
		      	 <input type="button" value="提交" class="info_sub">
		    </div>
		  </form>
		</div>
	</div>
</div>
<script>

    //弹出图片裁剪框
    $(".marsk_img").on("click",function () {
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
$('.info_sub').click(function(){
        var dt = $('[name=dt]').val();
        var sid = $('[name=sid]').val();
        var video = $('[name=video]').val();
        var pic = $('[name=pic]').val();
        var nurl = "<?php echo site_url('website/homepage/sub') ?>";
        $.post(nurl,{dt:dt,sid:sid,video:video,pic:pic},function(data){
            if(data){
                $('.edit-coms > .edit-content').html('');
                $.each(data.tarr,function(index,item){
                $('.edit-coms > .edit-content').append(item);
                })
            }
        },"json");
})
</script>