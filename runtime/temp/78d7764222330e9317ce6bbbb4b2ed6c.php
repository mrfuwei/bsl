<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\index\chakan.html";i:1593498697;s:71:"D:\phpstudy_pro\WWW\nianka_v2\application\index\view\common\header.html";i:1588070741;s:72:"D:\phpstudy_pro\WWW\nianka_v2\application\index\view\common\daohang.html";i:1593311328;s:71:"D:\phpstudy_pro\WWW\nianka_v2\application\index\view\common\footer.html";i:1593393184;}*/ ?>
﻿<!doctype html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=10"/>
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
    #home {
        background: #62b5d7
    }

    select {
        width: 100%;
        height: 38px;
        border: 1px solid #e6e6e6;
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
<div class="right layui-main layui-tab layui-tab-brief" style="min-height:700px;margin-top:0;">
    <div class="layui-from layui-form-pane">
        <div style="padding:10px;">
            <h1><?php echo $cardxx['cardname']; ?>详情</h1>
        </div>
        <HR>


        <div>
            <div class="layui-form-item">
                <div class="layui-row">
                    <div class="layui-col-md5">
                        <div class="site-groupphoto-flow">
                            <img style="margin-top:30px;" src="/nianka_v2/public<?php echo $clubxx['photo']; ?>">
                        </div>
                    </div>
                    <div class="layui-col-md5">
                        <div class="layui-row" style="margin:50px auto 50px;">
                            <label class="layui-form-label">年卡类型</label>
                            <div class="layui-col-md6">
                                <select name="card_type" lay-verify="required" disabled="disabled">
                                    <?php switch($clubxx['card_type']): case "1": ?>
                                    <option value="1">工作日卡</option>
                                    <?php break; case "2": ?>
                                    <option value="2">非节假日卡</option>
                                    <?php break; case "3": ?>
                                    <option value="3">畅玩卡</option>
                                    <?php break; endswitch; ?>


                                </select>
                            </div>
                        </div>
                        <div class="layui-row" style="margin:50px auto 50px;">
                            <label class="layui-form-label">开始日期：</label>
                            <div class="layui-col-md7">
                                <input class="layui-input" name="starttime" id="start" type="text" placeholder="年-月-日"
                                       value="<?php echo $clubxx['startdate']; ?>" disabled="" readonly>
                            </div>
                        </div>
                        <div class="layui-row">
                            <label class="layui-form-label">终止日期：</label>
                            <div class="layui-col-md7">
                                <input class="layui-input" name="endtime" id="end" type="text" placeholder="年-月-日"
                                       value="<?php echo $clubxx['enddate']; ?>" disabled="" readonly>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <?php if(is_array($memberxx) || $memberxx instanceof \think\Collection || $memberxx instanceof \think\Paginator): $i = 0; $__LIST__ = $memberxx;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="layui-form-item">
                <div class="layui-col-md5">
                    <div class="site-photo-flow" style="width: 360px;height:240px;">
                        <img src="/nianka_v2/public<?php echo $vo['photo']; ?>" alt="" style="width:100%;height:100%;">
                    </div>
                </div>
                <div class="layui-col-md5" style="margin-bottom:100px;">
                    <div class="layui-row" style="margin-bottom: 15px;margin-top:5px;">
                        <label class="layui-form-label">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</label>
                        <div class="layui-col-md7">
                            <input name="username" lay-verify="username" autocomplete="off" placeholder="请输入姓名"
                                   class="layui-input" type="text" id="username" disabled="" value="<?php echo $vo['membername']; ?>">
                        </div>
                    </div>
                    <div class="layui-row" style="margin-bottom: 15px;margin-top:25px;">
                        <label class="layui-form-label">身份证号：</label>
                        <div class="layui-col-md7">
                            <input name="shenfenz" id="shenfenz" lay-verify="identity" placeholder="" autocomplete="off"
                                   class="layui-input" type="text" disabled="" value="<?php echo $vo['idnumber']; ?>">
                        </div>
                    </div>
                    <div class="layui-row" style="margin-bottom: 15px;margin-top:25px;">
                        <label class="layui-form-label">手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：</label>
                        <div class="layui-col-md7">
                            <input name="phone" id="phone" lay-verify="phone" autocomplete="off" class="layui-input"
                                   type="tel" disabled="" value="<?php echo $vo['phone']; ?>">
                        </div>
                    </div>
                    <div class="layui-row" style="margin-bottom: 15px;margin-top:25px;">
                        <label class="layui-form-label">人脸特征：</label>
                        <div class="layui-col-md7">
                            <input  autocomplete="off" class="layui-input"
                                   type="tel" disabled="disabled" value="<?php if($vo['is_get_features'] == 1): ?>提取成功<?php else: ?>提取失败<?php endif; ?>">

                        </div>
                    </div>
                </div>
            </div>

            <div class="layui-col-md5">

            </div>

            <div class="layui-form-item">
                <div class="layui-col-md5">

                </div>

            </div>
            <div class="layui-form-item">
                <div class="layui-col-md5">

                </div>

            </div>

            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>




    </div>
    <div class="layui-form-item">

        <?php if(is_array($memberxx) || $memberxx instanceof \think\Collection || $memberxx instanceof \think\Paginator): $i = 0; $__LIST__ = $memberxx;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;endforeach; endif; else: echo "" ;endif; ?>
    </div>


    <div id="bott" class="layui-row" style="margin-bottom:30px;">
        <div class="layui-col-md5" style="text-align: center;">
            <button class="layui-btn layui-btn-normal layui-btn-radius" href="" id="dayin">打印</button>
        </div>
        <div class="layui-col-md3" style="text-align: center;">
            <!--        <li style="width:33%"><button class="layui-btn layui-btn-normal layui-btn-radius" href="" id="dayin2">打印老卡</button></li>-->
            <button class="layui-btn layui-btn-big layui-btn-radius" lay-submit="" lay-filter="demo1" id="goback">返回
            </button>
        </div>
    </div>
    <!-- <li><button class="layui-btn layui-btn-warm layui-btn-radius">打印</button></li> -->


</div>


<div class="footer noprint">
    <p>版权所有 © 2020 宁波神凤海洋世界有限公司</p>
</div>
<script type="text/javascript" src="/nianka_v2/public/static/jeDate/jedate.js" charset="utf-8"></script>
<script>


    $('#goback').click(function () {
        history.back(-1);
    });


    $('#dayin').click(function () {

        var kahao = $('#kahao').val();
        //alert(kahao);
        window.location.href = 'dayin.html?id=' + <?php echo $clubxx['cardno']; ?>;
    });
    $('#dayin2').click(function () {

        var kahao = $('#kahao').val();
        //alert(kahao);
        window.location.href = 'dayin2.html?id=' + kahao;
    });

</script>


</body>
</html>