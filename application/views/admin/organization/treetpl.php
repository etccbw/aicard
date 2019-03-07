<ul class="am-list  admin-sidebar-sub" id="user-nav" style="padding-left:6px">
        <?php foreach ($tree as $v):?>
        <li class="am-panel">
            <a  class="item" data-id="<?=$v['id']?>"><i class="am-icon-user am-margin-left-sm" ></i> <?=$v['name']?> <i class="am-icon-angle-right am-fr am-margin-right"></i></a>   
        </li>
        <?php endforeach; ?>
    </ul>