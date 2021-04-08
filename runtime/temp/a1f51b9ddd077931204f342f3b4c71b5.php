<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\index\bumen.html";i:1588552945;s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\header.html";i:1588070741;s:82:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\daohang.html";i:1588552605;s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\footer.html";i:1587707976;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>年卡管理系统</title>
<!--  <meta name="renderer" content="webkit">-->
  <link rel="shortcut icon" href="__STATIC__/favicon.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="__STATIC__/layui/css/layui.css"  media="all">
  <link rel="stylesheet" href="__STATIC__/css/font.css"  media="all">
  <link rel="stylesheet" href="__STATIC__/css/common.css"  media="all">
  <script src="__STATIC__/js/jquery-3.1.1.js" charset="utf-8"></script>
  <script src="__STATIC__/js/mymin.js" charset="utf-8"></script>
<link rel="stylesheet" href="__STATIC__/css/bumen.css">
</head>
<style>
#bumen{background:#62b5d7}
</style>
<body>
           
<div id="layui-center" class="layui-layout layui-layout-admin">
  <img src="__STATIC__/images/logo5.png" alt="" class="logo">
  <ul><li><span><?php echo $username; ?></span>　<a href="logout">退出</a></li></ul>
</div>
<style>
  .layui-nav-child dd a:hover{background:#2b2e37 !important;}
  .layui-nav-child dd {
    position: relative;
    background: #f1f1f1;
  }
</style>
<ul class="layui-nav layui-nav-tree noprint" lay-filter="demo" id="layui-left" style="width:16%;">
  <li class="layui-nav-item layui-nav-itemed" >
    <a href="javascript:;">默认展开</a>
    <dl class="layui-nav-child" style="background:#f1f1f1;">
    <dd id="index"><a href="index.html" style="background:#f1f1f1;">首 　　页</a></dd>
    <dd id="chaxuncard"><a href="chaxuncard.html">年卡查询</a></dd>
    <dd id="home"><a href="home.html">年卡管理</a></dd>
    <dd id="list1"><a href="list1.html">年卡列表</a></dd>
<!--    <dd id="statistics"><a href="statistics.html">财务统计</a></dd>-->
    <dd id="bumen"><a href="bumen.html">部门管理</a></dd>
    <dd id="role"><a href="role.html">角色管理</a></dd>
    <dd id="logout"><a href="logout">退出系统</a></dd>
    </dl>
  </li>
</ul>
 <div class="right" style="min-height:700px;height:auto;">

    <div class="layui-frome">
       <h1>部门管理</h1>
     <HR>


    <table>
    
    <tr>
      <th><input type="checkbox" name="" class="allChoose" lay-skin="primary" lay-filter="allChoose"></th>
      <th>ID</th>
      <th>部门</th>
    </tr>
    <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr>
      <td><input type="checkbox" id="<?php echo $vo['orgid']; ?>" value="<?php echo $vo['orgid']; ?>" class="delusers" name="" lay-skin="primary"></td>
      <td><?php echo $vo['orgid']; ?></td>
      <td><?php echo $vo['orgname']; ?></td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>

    </table>
    <div style="float:right;margin-top:20px;margin-bottom:30px;">
      <a href="addbumen.html"><button class="layui-btn" target="_blank"><i class="layui-icon"></i>增加</button></a>
      <button class="layui-btn layui-btn-dange layui-btn-normal" id="delRow"><i class="layui-icon"></i> 删除</button>

    </div>
      
  </div>
 </div>

<div class="footer noprint">
    <p>版权所有 © 2017 宁波神凤海洋世界有限公司</p>
</div>
<style type="text/css">
 
</style>

<script type="text/javascript">
$('.allChoose').click(function(){
    if(this.checked){   
        $("input:checkbox").prop("checked", true);  
    }else{   
        $("input:checkbox").prop("checked", false);
    }  
});

$('#delRow').click(function(){
    var ids = '';
    $(".delusers").each(function() {
    if ($(this).is(':checked')) {
      ids += ',' + $(this).val(); //逐个获取id
      }
    });
    ids = ids.substring(1); // 对id进行处理，去除第一个逗号
    //alert(ids);
    if (ids.length == 0) {
      alert('请选择要删除的选项');
    } else {
      if (confirm("您确定要删除这些吗？删除后将无法恢复。")) {

        //url = "action=del_call_record&ids=" + ids;
        $.ajax({
          type: "post",
          url: "delbumen.html",
          data:{"id":ids},
          dataType:'json',
          success: function(data) {
            // alert(data);
            if (parseInt(data) > 0) {
              alert("删除成功！");
              location.reload();
            } else {
              alert("删除失败！");
            }
          }
          // error: function(XMLHttpRequest, textStatus) {
          //   alert("页面请求错误，请检查重试或联系管理员！\n" + textStatus);
          // }
        });
      }
    }

});
</script>
</body>
</html>