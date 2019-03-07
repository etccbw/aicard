 <div class="widget-body-img">
                             <?php foreach($videobox as $v):?>
                                <div><video src="<?=$v['video']?>" controls="controls" height="150px" width="150px"  data-id="<?=$v['id']?>"></video></div>
                                 <?php endforeach?>
                            </div>
                            <div class="am-modal-footer">
      <span  class="am-modal-btn del" data-am-modal-confirm>删除</span>
      <span  class="am-modal-btn refresh" data-am-modal-cancel>返回</span>
    </div>
<style type="text/css">
.widget-body-img div{
    width: 180px;
    height: 180px;
    float: left;
}
.border{
  border:5px solid #E9ECF3;
}
</style>
<script type="text/javascript">
$('.widget-body-img div').click(function(){
    $(this).toggleClass('border')
})
$('.refresh').on('click',function(){
    location.reload();
})
$('.del').on('click',function(){
         
    function getvideoid(){
        var alts= '';
        var videolist = $(".border video");
        for(var i=0;i<videolist.length;i++){
            var alt=videolist[i];
           alts += $(alt).attr('data-id')+",";
        }
       var getvideoid = alts.substring(0,alts.length-1);
        return getvideoid;
    }
    var videoid = getvideoid();
        $.ajax({
            url:"/admin/product/delvideo",
            dataType:'json',
            data:{videoid:videoid},
            type:'post',
            error:function(){},
            success:function(res){
                if(res != 0){
                location.reload();
                }else{
                msg(res.msg);
                }
            },
        });
});
</script>                       