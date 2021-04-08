<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\index\push_record.html";i:1592904467;s:71:"D:\phpstudy_pro\WWW\nianka_v2\application\index\view\common\header.html";i:1588070741;s:72:"D:\phpstudy_pro\WWW\nianka_v2\application\index\view\common\daohang.html";i:1593311328;s:71:"D:\phpstudy_pro\WWW\nianka_v2\application\index\view\common\footer.html";i:1587707976;}*/ ?>
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
        #push_record {
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
        <span>推送记录</span>

        <HR>

        <div class="layui-layout layui-layout-admin">


            <div class="layui-form" style="margin-top:40px;">

                <table class="layui-table" id="myTable" style="table-layout:fixed" >

                    <colgroup>
                        <col width="50">
                        <col width="200">
                        <col width="900">
                        <col width="100">
                        <col width="150">

                    </colgroup>

                    <thead>
                    <tr id="theader" class="layui-table-col-special">
                        <th>ID</th>
                        <th>推送对象</th>
                        <th>推送内容</th>
                        <th>推送状态</th>
                        <th>推送时间</th>
                    </tr>
                    </thead>
                    <?php if(is_array($recordInfo) || $recordInfo instanceof \think\Collection || $recordInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $recordInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td><?php echo $record['id']; ?></td>
                        <td><?php echo $record['uid']; ?></td>
                        <td onmousemove="removeClassType(this)"><?php echo $record['message']; ?></td>
                        <td><?php switch($record['status']): case "0": ?>失败<?php break; case "1": ?>成功<?php break; default: ?>未知<?php endswitch; ?></td>
                        <td><?php echo $record['create_at']; ?></td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </table>
                <!--分页-->
                <div><?php echo $recordInfo->render(); ?></div>

            </div>
        </div>
    </div>

    <div class="footer noprint">
    <p>版权所有 © 2017 宁波神凤海洋世界有限公司</p>
</div>
    <script src="/nianka_v2/public/static/layui/layui.js"></script>

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
        function removeClassType($this) {
            $($this).attr("title",$this.innerText);
        }
    </script>


</body>
</html>