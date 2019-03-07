
                                          <div class="am-panel-hd"><?=$partment['name']?></div>
                                          <button type="button" class="am-btn am-btn-primary add"  id="<?=$partment['id']?>" data-id="member">添加职员</button>
                                          <button type="button" class="am-btn am-btn-primary add" id="<?=$partment['id']?>" data-id="department">添加部门</button>
                                          <button type="button" class="am-btn am-btn-primary editdm" id="<?=$partment['id']?>" >编辑</button>
                                          <button type="button" class="am-btn am-btn-primary deldm" id="<?=$partment['id']?>">删除</button>

<!--                                           <form class="tpl-header-search-form" action="javascript:;">
                                                <input class="tpl-header-search-box" type="text" placeholder="输入姓名搜索"><button class="tpl-header-search-btn am-icon-search"></button>
                                           </form>-->
                                          <div class="am-panel-bd">
                                         <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                             <?php if($member):?>
                                        <thead>
                                            <tr>
<!--                                                <th>头像</th>-->
                                                <th>姓名</th>
                                                <th>职位</th>
                                                <th>部门</th>
                                                <th>手机</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($member as $v):?> 
                                            <tr data-id="<?=$v['id']?>">
<!--                                                <td><img class="listimg" src="<?=$v['avatar']?>"></td>-->
                                                <td><?=$v['username']?></td>
                                                <td><?=$v['position']?></td>
                                                <td><?=$v['partment']?></td>
                                                <td><?=$v['tel']?></td>
                                                <td>
                                                    <span class="edit" data-id="<?=$v['id']?>">编辑 </span>
                                                    <span class="del" data-id="<?=$v['id']?>"> 删除</span>
                                                </td>
                                            </tr>
                                             <?php endforeach?>

                                            <!-- more data -->
                                        </tbody>
                                        <?php else:?>
                                        暂无数据
                                        <?php endif;?>
                                            </div>
                                         </div>
                                    </table>
                                    </div>

                                    <script>
                                        $(function(){
                                            $('.add').click(function(){
                                            var target = $(this).attr('data-id');
                                            if(target === 'member'){
                                                var url = "<?=site_url('admin/organization/addMember')?>"
                                            }else{
                                                var url = "<?=site_url('admin/organization/addDepartment')?>"
                                            }
//                                            alert(url);
                                            $.post(url,{id:<?=$partment['id']?>},function(res){
                                                $('#partment').hide();
                                                $('#optbox').html(res).show()
                                                //console.log(res);
                                            })
                                            })
                                            $('.edit').click(function(){
                                                var target = $(this).attr('data-id');
                                                var url = "<?=site_url('admin/organization/editMember')?>"
                                                $.post(url,{id:target},function(res){
                                                    $('#partment').hide();
                                                    $('#optbox').html(res).show()
                                                })
                                            })
                                            $('.del').click(function(){
                                                var that = $(this);
                                                var r=confirm("确定要删除吗？")
                                                if (r==true)
                                                  {
                                                    var target = $(this).attr('data-id');
                                                    var url = "<?=site_url('admin/organization/delMember')?>"
                                                    $.post(url,{id:target},function(res){
                                                        if(res.code==='0'){
                                                            that.parents("tr[data-id='"+target+"']").remove()
                                                        }
                                                    })
                                                  }
                                            })
                                            $('.editdm').click(function(){
                                                var target = $(this).attr('id');
                                                var url = "<?=site_url('admin/organization/editDepartment')?>"
                                                $.post(url,{id:target},function(res){
                                                    $('#partment').hide();
                                                    $('#optbox').html(res).show()
                                                })
                                            })
                                            $('.deldm').click(function(){
                                                var that = $(this);
                                                var r=confirm("警告:部门下的成员将一并删除")
                                                if (r==true)
                                                  {
                                                    var target = $(this).attr('id');
                                                    var url = "<?=site_url('admin/organization/delDepartment')?>"
                                                    $.post(url,{id:target},function(res){
                                                        if(res.code==='0'){
                                                            alert("删除成功，请刷新");
                                                        }else{
                                                            alert(res.msg);
                                                        }
                                                    })
                                                  }
                                            })
                                        })
                                    </script>
                                    <style>
                                        .edit,.del{
                                            cursor:pointer
                                        }
                                        </style>