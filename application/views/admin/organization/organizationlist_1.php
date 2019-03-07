<!DOCTYPE html>
<html lang="en">

<?=$header?>

<body data-type="index">
    <script src="../../assets/js/theme.js"></script>
    <script src="../../assets/js/amazeui.min.js"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
       <?=$top?>
   
        <!-- 风格切换 -->
       <?=$style?>
        <!-- 侧边导航栏 -->
         <?=$left_nav?>
<style type="text/css">
.listimg{
    width: 60px;
    height: 60px;
}
</style>
        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">组织架构</div>
                                    <div class="am-g">
                                      <div class="am-u-sm-3">
                                       <ul class="am-list admin-sidebar-list" id="collapase-nav-1">
  <li class="am-panel">
    <a data-am-collapse="{parent: '#collapase-nav-1', target: '#user-nav'}">
        <i class="am-icon-users am-margin-left-sm"></i> 中亚集团 <i class="am-icon-angle-right am-fr am-margin-right"></i>
    </a>
    <ul class="am-list am-collapse admin-sidebar-sub" id="user-nav">
        <li>
            <a href="#/userAdd" data-am-collapse="{target: '#user-list'}"><i class="am-icon-user am-margin-left-sm" ></i> 中亚电子中心 </a>   
         <ul class="am-list am-collapse admin-sidebar-sub" id="user-list">
            <li><a href="#/userAdd" data-am-collapse="{target: '#user-2'}"><i class="am-icon-user am-margin-left-sm"></i> 产品部 </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="user-2">
                       <li><a href="#/userAdd"><i class="am-icon-user am-margin-left-sm"></i> 设计组 </a></li>
                       <li><a href="#/userList/0"><i class="am-icon-user am-margin-left-sm"></i> 产品组 </a>
                </ul>
            </li>
            <li><a href="#/userList/0" data-am-collapse="{target: '#user-1'}"><i class="am-icon-user am-margin-left-sm"></i> 开发部 </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="user-1">
                       <li><a href="#/userAdd"><i class="am-icon-user am-margin-left-sm"></i> 项目一组 </a></li>
                       <li><a href="#/userList/0"><i class="am-icon-user am-margin-left-sm"></i> 项目二组 </a>
                </ul>
            </li>
         </ul>
        </li>
        <li><a href="#/userList/0"><i class="am-icon-user am-margin-left-sm"></i> 中亚商务中心 </a></li>
    </ul>
  </li>
</ul> 

<ul id="demo">
  <item
    class="item"
    :model="treeData">
  </item>
</ul>


                                    </div>
                                      <div class="am-u-sm-9">
                                      <div class="am-panel  am-panel-secondary">
                                          <div class="am-panel-hd">深圳市壆岗中亚电子博览中心股份有限公司</div>
                                          <button type="button" class="am-btn am-btn-primary">添加</button>
                                          <button type="button" class="am-btn am-btn-danger">删除</button>
                                           <form class="tpl-header-search-form" action="javascript:;">
                                                <input class="tpl-header-search-box" type="text" placeholder="输入姓名搜索"><button class="tpl-header-search-btn am-icon-search"></button>
                                           </form>
                                          <div class="am-panel-bd">
                                         <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>头像</th>
                                                <th>姓名</th>
                                                <th>职位</th>
                                                <th>部门</th>
                                                <th>手机</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($card as $v):?> 
                                            <tr >
                                                <td><img class="listimg" src="<?=$v['avatar']?>"></td>
                                                <td><?=$v['username']?></td>
                                                <td><?=$v['duties']?></td>
                                                <td><?=$v['duties']?></td>
                                                <td><?=$v['tel']?></td>
                                            </tr>
                                             <?php endforeach?>

                                            <!-- more data -->
                                        </tbody>
                                            </div>
                                         </div>
                                    </table>
                                      </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="am-modal am-modal-prompt" tabindex="-1" id="my-prompt">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">增加部门</div>
    <div class="am-modal-bd">
      部门：
      <input type="text" class="am-modal-prompt-input">
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span class="am-modal-btn" data-am-modal-confirm>提交</span>
    </div>
  </div>
</div>

<div class="am-modal am-modal-prompt" tabindex="-1" id="my-upid">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">修改部门</div>
    <div class="am-modal-bd">
      部门：
      <input type="text" class="am-modal-prompt-input">
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span class="am-modal-btn" data-am-modal-confirm>提交</span>
    </div>
  </div>

</div><div class="am-modal am-modal-prompt" tabindex="-1" id="my-delid">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">删除部门</div>
    <div class="am-modal-footer">
      <span class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span class="am-modal-btn" data-am-modal-confirm>确定</span>
    </div>
  </div>
</div>


<div id="app">
    <p v-if="show">显示这段文本</p>
</div>
<script>

$(function() {
  $('i').on('click', function() {
   var type =  $(this).attr('type');
   var addvalue = $(this).attr('addvalue');
  if(type == "addid"){
        $('#my-prompt').modal({
      relatedTarget: this,
      onConfirm: function(e) {
        var content = e.data;
        console.log(content);
        $.ajax({
                type:'post',
                url:'/admin/organization/addid',
                data:{'content' : content},
                success:function(data){
                   console.log(data);
                    location.reload();
                }
            });
      },
      onCancel: function(e) {
        alert('不想说!');
      }
    });
 }else if(type == "upid"){
        $('#my-upid').modal({
      relatedTarget: this,
      onConfirm: function(e) {
        alert('你输入的是：' + e.data || '')
      },
      onCancel: function(e) {
        alert('不想说!');
      }
    });
 }else{
     $('#my-delid').modal({
      relatedTarget: this,
      onConfirm: function(e) {
        alert('你输入的是：' + e.data || '')
      },
      onCancel: function(e) {
        alert('不想说!');
      }
    });
 }
   

  });
});
</script>
<script type="text/javascript">
var data = {
  name: 'My Tree',
  children: [
    { name: 'hello' },
    { name: 'wat' },
    {
      name: 'child folder',
      children: [
        {
          name: 'child folder',
          children: [
            { name: 'hello' },
            { name: 'wat' }
          ]
        },
        { name: 'hello' },
        { name: 'wat' },
        {
          name: 'child folder',
          children: [
            { name: 'hello' },
            { name: 'wat' }
          ]
        }
      ]
    }
  ]
}

// define the item component
Vue.component('item', {
  template: '#item-template',
  props: {
    model: Object
  },
  data: function () {
    return {
      open: false
    }
  },
  computed: {
    isFolder: function () {
      return this.model.children &&
        this.model.children.length
    }
  },
  methods: {
    toggle: function () {
      if (this.isFolder) {
        this.open = !this.open
      }
    },
    changeType: function () {
      if (!this.isFolder) {
        Vue.set(this.model, 'children', [])
        this.addChild()
        this.open = true
      }
    },
    addChild: function () {
      this.model.children.push({
        name: 'new stuff'
      })
    },
     delChild: function () {
      console.log("delChild");

      // this.model.children.push({
      //   name: 'new stuff'
      // })
    },
     updateChild: function () {
       console.log("updateChild");
      // this.model.children.push({
      //   name: 'new stuff'
      // })
    }
  }
})
   //当数据show的值为true时，p元素会被插入，为false时会被移除
    var myData = {
        show:false
    };
    var app = new Vue({
        el:'#app',
        data:myData,
          })
// boot up the demo
var demo = new Vue({
  el: '#demo',
  data: {
    treeData: data
  }
})
</script>
<style type="text/css">
body {
  font-family: Menlo, Consolas, monospace;
  color: #444;
}
.item {
  cursor: pointer;
}
.bold {
  font-weight: bold;
}
ul {
  padding-left: 1em;
  line-height: 1.5em;
  list-style-type: dot;
}
</style>

