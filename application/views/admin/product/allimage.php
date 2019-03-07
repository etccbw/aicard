
<base href="<?php  echo base_url();?>"/>
<?php echo $header?>
        <ul>
        <?php foreach($items as $v):?>
            <li><img src="<?=$v['image']?>" class="imagelist" alt=""></li>
        <?php endforeach?>
        </ul>
  <script>

$(document).ready(function(){
  $("img").on("click",function(){
    url = $(this).attr('src');
   console.log($(this).attr('src'));
   var callbackdata = function () {
        var url = $(this).attr('src');
            var data = {
                username: 'url'
            };
            console.log(data);
        return data;
        }
    // var index = parent.layer.getFrameIndex(window.name);
    // console.log(index);
    // parent.layer.close(index);
  });
});

  // 获得frame索引
 

  //关闭当前frame
  //
  </script>
  <style type="text/css">
.imagelist{
  float: left;
  width: 120px;
  height: 120px;
  margin: 20px;
}
</style>
