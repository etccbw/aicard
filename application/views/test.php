<!-- <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="/assets/css/layui.css"  media="all">
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
<!-- </head>
<body>
            
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
  <legend>基本树</legend>
</fieldset>
 
<div style="display: inline-block; width: 180px; height: 210px; padding: 10px; border: 1px solid #ddd; overflow: auto;">
  <ul id="demo1"></ul>
</div> -->


 

<!-- <script src="/assets/js/layui.js" charset="utf-8"></script> -->
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<!--<script>
//Demo
// layui.use(['tree', 'layer'], function(){
//   var layer = layui.layer
//   ,$ = layui.jquery; 
  
//   layui.tree({
//     elem: '#demo1' //指定元素
//     ,target: '_blank' //是否新选项卡打开（比如节点返回href才有效）
//     ,click: function(item){ //点击节点回调
//       layer.msg('当前节名称：'+ item.node_name + '<br>全部参数：'+ JSON.stringify(item));
//       console.log(item);
//     }
//     ,nodes:Tree()
//   });
//   function Tree(){
    // var nodes = "";
    // $.ajax({
    //   url:"/admin/Organization/organizationlist/" ,
    //   type:"post",
    //   data:"",
    //   dataType:"json",
    //   async:false,
    //   success:function(data){
    //     nodes = data;
    //   console.log(nodes);
    //   }
    // });
     var nodes =  [{
                "id": "1",
                "name": "父节点1",
                "children": [{
                        "id": "11",
                        "name": "子节点11"
                    },
                    {
                        "id": "12",
                        "name": "子节点12"
                    }
                ]
            },
            {
                "id": "2",
                "name": "父节点2",
                "children": [{
                    "id": "21",
                    "name": "子节点21",
                    "children": [{
                        "id": "211",
                        "name": "子节点211"
                    }]
                }]
            }
        ],;
    return nodes;
  }
  //生成一个模拟树
  var createTree = function(node, start){

    node = node || function(){
      var arr = [];
      for(var i = 1; i < 10; i++){
        arr.push({
          node_name: i.toString().replace(/(\d)/, '$1$1$1$1$1$1$1$1$1')
        });
      }
      return arr;
    }();
    start = start || 1;  
    layui.each(node, function(index, item){  
      if(start < 10 && index < 9){
        var child = [
          {
            node_name: (1 + index + start).toString().replace(/(\d)/, '$1$1$1$1$1$1$1$1$1')
          }
        ];
        console.log(node);
        node[index].son = child;
        createTree(child, index + start + 1);
      }
    });
    return node;
  };
});
</script>

</body>
</html>
<!DOCTYPE html>
<html> -->
<!-- <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/layui.css">
</head>

<body>
    <div id="demo"></div>
</body> -->
<!--<script src="/assets/JS/layui.js"></script>
<script type="text/javascript">

// layui.use(['tree', 'layer'], function(){
//     var layer = layui.layer;
// var layer = layui.layer
//   ,$ = layui.jquery; 
//     layui.tree({
//         elem: '#demo',
//         check: 'checkbox',              //输入checkbox则生成带checkbox的tree, 默认不带checkbox
//         skin: 'as',                     //设定皮肤
//         drag: true,                     //点击每一项时是否生成提示信息
//         checkboxName: 'selectedArr',    //复选框的name属性值
//         checkboxStyle: "",              //设置复选框的样式，必须为字符串，css样式怎么写就怎么写
//         click: function(item){          //节点点击事件
//             layer.msg('当前节名称：'+ item.node_name + '<br>全部参数：'+ JSON.stringify(item));
//             console.log(item);
//         },
//         nodes: [{
//                 "id": "1",
//                 "name": "父节点1",
//                 "children": [{
//                         "id": "11",
//                         "name": "子节点11"
//                     },
//                     {
//                         "id": "12",
//                         "name": "子节点12"
//                     }
//                 ]
//             },
//             {
//                 "id": "2",
//                 "name": "父节点2",
//                 "children": [{
//                     "id": "21",
//                     "name": "子节点21",
//                     "children": [{
//                         "id": "211",
//                         "name": "子节点211"
//                     }]
//                 }]
//             }
//         ],

  // nodes: [{
        //         "nid": "1",
        //         "name": "父节点1",
        //         "children": [{
        //                 "id": "11",
        //                 "name": "子节点11"
        //             },
        //             {
        //                 "id": "12",
        //                 "name": "子节点12"
        //             }
        //         ]
        //     },
        //     {
        //         "node_id": "2",
        //         "node_name": "父节点2",
        //         "children": [{
        //             "node_id": "21",
        //             "node_name": "子节点21",
        //             "children": [{
        //                 "node_id": "211",
        //                 "node_name": "子节点211"
        //             }]
        //         }]
        //     }
        // ],
    });

function Tree(){
    var nodes = "";
    $.ajax({
      url:"/admin/Organization/organizationlist/" ,
      type:"post",
      data:"",
      dataType:"json",
      async:false,
      success:function(data){
        nodes = data;
      console.log(data);
      }
    });
  }
Tree();

newnodes = [{"nid": "1","name": "父节点1",
"children": [{"id": "11","name": "子节点11"},{"id": "12","name": "子节点12"}]},{"node_id": "2","node_name": "父节点2",
"children": [{"node_id": "21","node_name": "子节点21",
"children": [{"node_id": "211","node_name": "子节点211"}]}]}],
console.log(newnodes);


});
  
</script>

</html>

<!-- {"data":{
"1":{
"node_id":"1","f_id":"0","node_name":"\u4e2d\u4e9a\u96c6\u56e2",
"children":{"2":{"node_id":"2","f_id":"1","node_name":"\u4e2d\u4e9a\u7535\u5b50",
"children":{"3":{"node_id":"3","f_id":"2","node_name":"\u7535\u5b50\u5546\u52a1\u4e2d\u5fc3",
"children":{"4":{"node_id":"4","f_id":"3","node_name":"\u4ea7\u54c1\u8bbe\u8ba1\u90e8",
"children":{"9":{"node_id":"9","f_id":"4","node_name":"\u4ea7\u54c1\u7ec4",
"children":[]},"10":{"node_id":"10","f_id":"4","node_name":"\u8bbe\u8ba1\u7ec4",
"children":[]}}},"5":{"node_id":"5","f_id":"3","node_name":"\u6280\u672f\u7814\u53d1\u90e8",
"children":{"6":{"node_id":"6","f_id":"5","node_name":"\u9879\u76ee\u4e00\u7ec4",
"children":[]},"7":{"node_id":"7","f_id":"5","node_name":"\u9879\u76ee\u4e8c\u7ec4",
"children":[]},"8":{"node_id":"8","f_id":"5","node_name":"\u9879\u76ee\u4e09\u7ec4",
"children":[]}}}}}}}}}}}
 -->

<!-- [{"nid": "1","name": "父节点1",
"children": [{"id": "11","name": "子节点11"},{"id": "12","name": "子节点12"}]},{"node_id": "2","node_name": "父节点2",
"children": [{"node_id": "21","node_name": "子节点21",
"children": [{"node_id": "211","node_name": "子节点211"}]}]}] -->
    <link rel="stylesheet" href="/assets/layui/css/layui.css">
    <script src="/assets/layui/layui.js"></script>
    <body>
    <div id="demo"></div>
</body> 
<script type="text/javascript">
layui.use(['tree', 'layer'], function(){
    var layer = layui.layer;
var layer = layui.layer
  ,$ = layui.jquery; 
    layui.tree({
        elem: '#demo',
        check: 'checkbox',              //输入checkbox则生成带checkbox的tree, 默认不带checkbox
        skin: 'as',                     //设定皮肤
        drag: true,                     //点击每一项时是否生成提示信息
        checkboxName: 'selectedArr',    //复选框的name属性值
        checkboxStyle: "background: #3385ff;",              //设置复选框的样式，必须为字符串，css样式怎么写就怎么写
        click: function(item){          //节点点击事件
            layer.msg('当前节名称：'+ item.name + '<br>全部参数：'+ JSON.stringify(item));
             console.log(item.name);
            console.log(item);
        },
        nodes:Tree(),
        // [{"id":"9","f_id":"4","name":"\u4ea7\u54c1\u7ec4","children":[{"id":"9","f_id":"4","name":"\u4ea7\u54c1\u7ec4","children":[{"id":"9","f_id":"4","name":"\u4ea7\u54c1\u7ec4","children":[]},{"id":"10","f_id":"4","name":"\u8bbe\u8ba1\u7ec4","children":[{"id":"9","f_id":"4","name":"\u4ea7\u54c1\u7ec4","children":[{"id":"9","f_id":"4","name":"\u4ea7\u54c1\u7ec4","children":[]},{"id":"10","f_id":"4","name":"\u8bbe\u8ba1\u7ec4","children":[{"id":"9","f_id":"4","name":"\u4ea7\u54c1\u7ec4","children":[]},{"id":"10","f_id":"4","name":"\u8bbe\u8ba1\u7ec4","children":[]}]}]},{"id":"10","f_id":"4","name":"\u8bbe\u8ba1\u7ec4","children":[]}]}]},{"id":"10","f_id":"4","name":"\u8bbe\u8ba1\u7ec4","children":[]}]},{"id":"10","f_id":"4","name":"\u8bbe\u8ba1\u7ec4","children":[]}],
    });
function Tree(){
    var nodes = "";
    var pid = "1";
    $.ajax({
      url:"/admin/Organization/organizationlist/",
      type:"post",
      data:{pid:pid},
      dataType:"json",
      async:false,
      success:function(data){
        nodes = data;
        console.log(nodes);
      }
    });
    return nodes;
  }
});
</script>
