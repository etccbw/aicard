 <div class="widget-body-img">
                             <?php foreach($imagebox as $v):?>
                                     <img   src="<?=$v['image']?>"   imgid="<?=$v['id']?>">
                                 <?php endforeach?>
                            </div>
                            <div class="am-modal-footer">
      <span  class="am-modal-btn del" data-am-modal-confirm>删除</span>
      <span  class="am-modal-btn refresh" data-am-modal-cancel>返回</span>
    </div>
<script type="text/javascript">
$('.widget-body-img img').click(function(){
    $(this).toggleClass('border')
})
$('.refresh').on('click',function(){
    location.reload();
})
$('.del').on('click',function(){
    function getimgid(){
        var alts= '';
        var imglist = $('.widget-body-img');
        var olis = imglist.children();
        for(var i=0;i<olis.length;i++){
            var alt=olis[i];
                if($(alt).attr('class')){
                    if($(alt).attr('class')=="border"){
                        alts += $(alt).attr('imgid')+",";
                    }
                }
        }
        var getimgid = alts.substring(0,alts.length-1);
        return getimgid;
    }
    var imgid = getimgid();
    $.ajax({
        url:"/admin/product/delimage",
        dataType:'json',
        data:{imgid:imgid},
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