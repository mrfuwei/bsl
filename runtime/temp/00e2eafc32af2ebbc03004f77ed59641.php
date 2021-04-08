<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\index\version_add.html";i:1593346553;s:71:"D:\phpstudy_pro\WWW\nianka_v2\application\index\view\common\header.html";i:1588070741;s:72:"D:\phpstudy_pro\WWW\nianka_v2\application\index\view\common\daohang.html";i:1593311328;s:71:"D:\phpstudy_pro\WWW\nianka_v2\application\index\view\common\footer.html";i:1587707976;}*/ ?>
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
    <style>
        #version_update {
            background: #62b5d7;
        }
        table tr td{
            border:1px solid white;
            white-space: nowrap;/*控制单行显示*/
            overflow: hidden;/*超出隐藏*/
            text-overflow: ellipsis;/*隐藏的字符用省略号表示   IE*/
            -moz-text-overflow: ellipsis;/*隐藏的字符用省略号表示  火狐*/
        }
    </style>
</head>
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
        <span>版本更新</span>

        <HR>

        <div class="layui-layout layui-layout-admin">
            <form class="layui-form" action="">
                <div class="layui-form-item">
                    <label class="layui-form-label">上传安装包</label>
                    <div class="layui-input-block">
                        <button type="button" class="layui-btn" id="uapk">
                            <i class="layui-icon">&#xe67c;</i>上传apk
                        </button>
<!--                        <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">-->
                    </div>

                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">下载链接</label>
                    <div class="layui-input-block">
                        <input type="text" name="download_link" id="download_link"  autocomplete="off" class="layui-input" readonly>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">版本号</label>
                    <div class="layui-input-block">
                        <input type="text" name="version_no" required  lay-verify="required" placeholder="版本号" autocomplete="off" class="layui-input">
                    </div>
                </div>




                <div class="layui-form-item">
                    <label class="layui-form-label">强制更新</label>
                    <div class="layui-input-block">
                        <input type="radio" name="is_force" value="1" title="是">
                        <input type="radio" name="is_force" value="0" title="否" checked>
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">更新信息</label>
                    <div class="layui-input-block">
                        <textarea name="remarks" placeholder="请输入内容" class="layui-textarea"></textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="footer noprint">
    <p>版权所有 © 2017 宁波神凤海洋世界有限公司</p>
</div>
    <script src="/nianka_v2/public/static/layui/layui.js"></script>

    <script>
        layui.use('form', function(){
            var form = layui.form;

            //监听提交
            form.on('submit(formDemo)', function(data){
                // layer.msg(JSON.stringify(data.field));
                $.post("<?php echo url('index/version_add_submit'); ?>",$(data.form).serialize(),function(res){
                    if (res.code === 0) {
                        layer.alert("提交成功");
                        // location.href = "chakan.html?id=" + res.code;
                    } else {
                        layer.alert(res.msg);
                    }
                });
                return false;
            });
        });
        layui.use(['layedit', 'laydate'], function () {
            var form = layui.form
                , layer = layui.layer
                , layedit = layui.layedit
                , laydate = layui.laydate;
        });
        var layer = layui.layer;

        layui.use('upload', function(){
            var upload = layui.upload;

            //执行实例
            var uploadInst =upload.render({
                elem: '#uapk' //绑定元素
                ,url: '<?php echo url("api/apk_upload"); ?>' //上传接口
                ,exts:'apk'
                ,size:51200
                ,accept:'file'
                ,done: function(res){
                    console.log(res);
                    //上传完毕回调
                    let filePath = 'http://'+res.data.host +'/nianka_v2/public/uploads/apk/'+ res.data.save;
                    $('#download_link').val(filePath);
                    layer.msg("上传apk成功");
                }
                ,error: function(){
                    //请求异常回调
                }
            });
        });



    </script>


</body>
</html>