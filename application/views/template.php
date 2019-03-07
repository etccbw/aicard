<script>
        window.onload = function () {
            var seewid = document.documentElement.clientWidth;
            var seehei = document.documentElement.clientHeight;
            // console.log('可视区高'+seehei+'可视区宽'+seewid);    
            document.querySelector("body").style.width = "100%";
            console.log(seewid)
        }
    </script>
<div class="list-complate-item sortable-drag" style="position:relative;" id="<?=$divid?>" onclick="edit_mode(this)" onmouseover="mod_mouseover(this)" onmouseout="mod_mouseout(this)" >
	<div class="del-mod" style="background:url(<?=base_url('public/img/login_icon_close_normal.png')?>) center center / cover;" onclick="delete_mode(this)"></div>
<?=$mod?>
</div>
