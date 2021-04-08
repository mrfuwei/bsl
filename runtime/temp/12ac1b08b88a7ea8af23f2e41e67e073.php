<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\index\list1.html";i:1588730415;s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\header.html";i:1588070741;s:82:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\daohang.html";i:1588552605;s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\footer.html";i:1587707976;}*/ ?>
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
        #list1 {
            background: #62b5d7;
        }
    </style>
</head>

<script>
    //搜索
    $(function () {
        $("input[type=button]").click(function () {
            var txt = $("input[type=text]").val();
            if ($.trim(txt) != "") {

                $("table tr:not('#theader')").hide().filter(":contains('" + txt + "')").show().css("background", "#63b5d7");
            } else {
                $("table tr:not('#theader')").css("background", "#fff").show();
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
<div class="right">
    <div class="layui-frome">
        <span>年卡列表</span>

        <HR>

        <div class="layui-layout layui-layout-admin">


            <div class="layui-form" style="margin-top:40px;">

                <table class="layui-table" id="myTable">

                    <colgroup>
                        <col width="50">
                        <col width="200">
                        <col width="200">
                        <col width="200">
                        <col width="200">
                        <col width="200">
                        <col width="200">
                        <col width="200">
                        <col>

                    </colgroup>

                    <thead>
                    <tr id="theader" class="layui-table-col-special">
                        <th class="layui-table-col-special"><input type="checkbox" name="" lay-skin="primary"
                                                                   lay-filter="allChoose"></th>
                        <th>姓名</th>
                        <th>类别</th>
                        <th>卡号</th>
                        <th>手机/电话</th>
                        <th>开始日期</th>
                        <th>终止日期</th>
                        <th>详情</th>
                    </tr>
                    </thead>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td><input id="<?php echo $user['cardno']; ?>" value="<?php echo $user['cardno']; ?>" class="delusers" type="checkbox" name=""
                                   lay-skin="primary"></td>
                        <td><?php echo $user['membername']; ?></td>
                        <td><?php echo $user['cardname']; ?></td>
                        <td><?php echo $user['cardno']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['startdate']; ?></td>
                        <td><?php echo $user['enddate']; ?></td>
                        <td><a href="chakan.html?id=<?php echo $user['cardno']; ?>" class="layui-btn layui-btn-xs">查看</a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="editcard.html?id=<?php echo $user['cardno']; ?>"
                               class="layui-btn layui-btn-danger layui-btn-xs">编辑</a></td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </table>
                <!--分页-->
                <div><?php echo $list->render(); ?></div>


                <span style="display:block;text-align:center;"><button
                        class="layui-btn layui-btn-dange layui-btn-normal"
                        id="delRow"><i
                        class="layui-icon"></i> 删除</button></span>
            </div>
        </div>
    </div>

    <div class="footer noprint">
    <p>版权所有 © 2017 宁波神凤海洋世界有限公司</p>
</div>
    <script src="__STATIC__/layui/layui.js"></script>

    <script>

        layui.use(['layedit', 'laydate'], function () {
            var form = layui.form
                , layer = layui.layer
                , layedit = layui.layedit
                , laydate = layui.laydate;
        });


        layui.use('form', function () {
            var $ = layui.jquery, form = layui.form;

            //全选
            form.on('checkbox(allChoose)', function (data) {
                var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]');
                child.each(function (index, item) {
                    item.checked = data.elem.checked;
                });
                form.render('checkbox');
            });
        });


        $('#delRow').click(function () {
            var ids = '';
            $(".delusers").each(function () {
                if ($(this).is(':checked')) {
                    ids += ',' + $(this).val(); //逐个获取id
                }
            });
            ids = ids.substring(1); // 对id进行处理，去除第一个逗号
            //alert(ids);
            if (ids.length == 0) {
                alert('请选择要删除的选项');
            } else {
                layer.confirm("您确定要删除这些吗？删除后将无法恢复。", {
                        btn: ['确定', '取消'],
                    }, function (index, layero) {
                        url = "action=del_call_record&ids=" + ids;
                        $.ajax({
                            type: "post",
                            url: "delcarduser.html",
                            data: {"id": ids},
                            dataType: 'json',
                            success: function (res) {
                                // alert(data);
                                if (res===true) {
                                    layer.msg("删除成功！", {time: 5000});
                                    location.reload();
                                } else {
                                    layer.msg("删除失败！");
                                }
                            }
                            // error: function(XMLHttpRequest, textStatus) {
                            //   alert("页面请求错误，请检查重试或联系管理员！\n" + textStatus);
                            // }
                        });

                    }, function (index) {
                        layer.close(index);
                    }
                );

            }


        });
    </script>


</body>
</html>