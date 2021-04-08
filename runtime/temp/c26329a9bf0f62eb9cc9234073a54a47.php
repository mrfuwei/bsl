<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:84:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\index\chaxuncard.html";i:1588249847;s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\header.html";i:1588070741;s:82:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\daohang.html";i:1588552605;s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\footer.html";i:1587707976;}*/ ?>
﻿<!doctype html>
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
<style>
#chaxuncard{background:#62b5d7}
</style>
</head>

<script>
//搜索
$(function(){
    $("input[type=button]").click(function(){
      var txt=$("input[type=text]").val();
      if($.trim(txt)!=""){
 
        $("table tr:not('#theader')").hide().filter(":contains('"+txt+"')").show().css("background","#63b5d7");
      }else{
        $("table tr:not('#theader')").css("background","#fff").show();
      }
    });
  })
  </script>
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
<div class="right layui-main layui-tab layui-tab-brief" style="min-height:700px;margin-top:0;">
    <div class=" layui-form-pane">
        <div style="padding:15px;">
            <h1>年卡查询</h1>
        </div>

        <HR>
        <form class="layui-form" style="margin:auto;">
            <div class="layui-input-block" style="width:600px;margin:auto;">
                <div class="layui-row">
                    <div class="layui-col-md2">
                        <select id="sel" name="search_type" style="float:left;wdith:50px;height:38px;margin-right:10px;" lay-verify="required">
                            <option value=""></option>
                            <option value="name">姓名</option>
                            <option value="phone">手机</option>
                            <option value="cardid">身份证</option>
                        </select>
                    </div>
                    <div class="layui-col-md6">
                        <input type="text" name="title" required lay-verify="required" placeholder="请输入 姓名/身份证号/手机号"
                               autocomplete="off" class="layui-input" style="width:90%;float:left;margin-right:20px;"
                               id="shousuoinput">
                    </div>
                    <div class="layui-col-md2">
                        <button class="layui-btn layui-btn-normal" lay-submit  lay-filter="search">搜索</button>
                    </div>

                </div>



            </div>

        </form>
        <table class="layui-hide layui-table " id="test" lay-filter="test"></table>
    </div>
</div>
 
<div class="footer noprint">
    <p>版权所有 © 2017 宁波神凤海洋世界有限公司</p>
</div>
<script type="text/html" id="barDemo">
    <a class="layui-btn layui-btn-xs" lay-event="detail" lay-filter="detail">查看</a>
    <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>
<script src="__STATIC__/layui/layui.js"></script>
<script>

layui.use(['layedit', 'laydate'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate; 
});

layui.use(['form','table'], function(){
    let form = layui.form;
    let table=layui.table;

    //监听工具条
    table.on('tool(test)', function(obj){ //注：tool 是工具条事件名，test 是 table 原始容器的属性 lay-filter="对应的值"
        var data = obj.data; //获得当前行数据
        // console.log(data);
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
        var tr = obj.tr; //获得当前行 tr 的 DOM 对象（如果有的话）

        if(layEvent === 'detail'){ //查看
            //do somehing
            window.location="chakan.html?id="+data.cardno;
        } else if(layEvent === 'del'){ //删除
            layer.confirm('真的删除行么', function(index){

                //向服务端发送删除指令
                $.ajax({
                    type: "post",
                    url: "delcarduser.html",
                    data:{"id":data.cardno},
                    dataType:'json',
                    success: function(data) {
                        // alert(data);
                        if (data===true) {
                            layer.msg("删除成功！");
                            obj.del(); //删除对应行（tr）的DOM结构，并更新缓存
                            layer.close(index);
                        } else {
                            layer.msg("删除失败！");
                            layer.close(index);
                        }
                    }
                 });
            });
        } else if(layEvent === 'edit'){
            window.location="editcard.html?id="+data.cardno;
        } else if(layEvent === 'LAYTABLE_TIPS'){
            layer.alert('Hi，头部工具栏扩展的右侧图标。');
        }
    });
    //监听提交
    form.on('submit(search)', function(data){
        // layer.msg(JSON.stringify(data.field));
        table.render({
            elem:'#test',
            url: "sousuocard.html",
            cols:[[
                {type:"checkbox"},
                {field:"membername",title:"姓名"},
                {field:"cardno",title:"卡号"},
                {field:"phone",title:"手机号"},
                {field:"idnumber",title:"身份证号"},
                {field:"startdate",title:"开始时间"},
                {field:"enddate",title:"结束时间"}
                ,{title:"操作",toolbar: '#barDemo'}
            ]],
            id:'findcard',
            page:true
            ,method:"post"
            ,where:data.field
        });

        return false;
    });
    return false;
});
</script>


</body>
</html>