<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\index\home.html";i:1592285383;s:71:"D:\phpstudy_pro\WWW\nianka_v2\application\index\view\common\header.html";i:1588070741;s:72:"D:\phpstudy_pro\WWW\nianka_v2\application\index\view\common\daohang.html";i:1593311328;s:71:"D:\phpstudy_pro\WWW\nianka_v2\application\index\view\common\footer.html";i:1593393184;}*/ ?>
﻿<!doctype html>
<html>
<head>
      <meta charset="utf-8">
  <title>年卡管理系统</title>
<!--  <meta name="renderer" content="webkit">-->
  <link rel="shortcut icon" href="/nianka_v2/public/static/favicon.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="/nianka_v2/public/static/layui/css/layui.css"  media="all">
  <link rel="stylesheet" href="/nianka_v2/public/static/css/font.css"  media="all">
  <link rel="stylesheet" href="/nianka_v2/public/static/css/common.css"  media="all">
  <script src="/nianka_v2/public/static/js/jquery-3.1.1.js" charset="utf-8"></script>
  <script src="/nianka_v2/public/static/js/mymin.js" charset="utf-8"></script>
</head>
<style>
    .dom li {
        width: 500px;
        height: 350px;
        margin: 10px;
        display: inline-block;
        text-align: center;
    }

    .dom li img {
        width: 455px;
        height: 307PX;
        border-radius: 10px;
        box-shadow: 2px 2px 2px #676767;
        margin-bottom: 10px;
    }

    #home {
        background: #62b5d7
    }
</style>

<body>
<div id="layui-center" class="layui-layout layui-layout-admin">
  <img src="/nianka_v2/public/static/images/logo5.png" alt="" class="logo">
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
      <dd id="list2"><a href="list2.html">过期年卡</a></dd>
<!--    <dd id="statistics"><a href="statistics.html">财务统计</a></dd>-->
    <dd id="bumen"><a href="bumen.html">部门管理</a></dd>
    <dd id="role"><a href="role.html">角色管理</a></dd>
      <dd id="push_record"><a href="push_record.html">推送记录</a></dd>
      <dd id="version_update"><a href="version_update.html">版本更新</a></dd>
    <dd id="logout"><a href="logout">退出系统</a></dd>
    </dl>
  </li>
</ul>
<div class="right">
    <div class="layui-frome">
        <h1>年卡管理</h1>
        <HR>
        <div class="dom">
            <ul>
                <?php if(is_array($cardinfo) || $cardinfo instanceof \think\Collection || $cardinfo instanceof \think\Paginator): $i = 0; $__LIST__ = $cardinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li>
                    <?php switch($vo['cardname']): case "儿童年卡": ?><a href="addcards.html?id=<?php echo $vo['cardid']; ?>"><?php break; case "成人年卡": ?><a href="addcards.html?id=<?php echo $vo['cardid']; ?>"><?php break; case "家庭年卡A": ?><a href="addcards.html?id=<?php echo $vo['cardid']; ?>"><?php break; case "家庭年卡B": ?><a href="addcards.html?id=<?php echo $vo['cardid']; ?>"><?php break; endswitch; ?>
                                <img src="data:images/jpg;base64,<?php echo $vo['cardimage']; ?>">
                                <p><?php echo $vo['cardname']; ?></p>
                            </a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
        </div>
    </div>

</div>

<div class="footer noprint">
    <p>版权所有 © 2020 宁波神凤海洋世界有限公司</p>
</div>
</body>
</html>