<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:82:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\index\addcards.html";i:1588835105;s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\header.html";i:1588070741;s:82:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\daohang.html";i:1588552605;s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\footer.html";i:1587707976;}*/ ?>
﻿<!doctype html>
<html lang="en">
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
        #home {
            background: #62b5d7
        }

    </style>

</head>
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

<div class="right layui-main layui-tab layui-tab-brief" style="margin-top:0;">
    <form class="layui-form layui-form-pane">
        <div style="padding:10px;">
            <h1>新增<?php echo $cardxx['cardname']; ?></h1>
        </div>
        <HR>
        <div class="">
            <div style="padding:15px;">
                <div class="layui-form-item">
                    <div class="layui-col-md5">
                        <div class="site-groupphoto-flow">
                            <input type="hidden" name="groupphoto" value="" lay-verify="photo">
                            <video autoplay="" width="591" height="345" style="border:1px solid #ccc;"></video>
                            <canvas style="display: none;margin:auto;margin-bottom:2px;">预览</canvas>
                            <button type="button" class="layui-btn snap"  style="margin-top:10px;">
                                点击拍制卡照
                            </button>
                        </div>
                    </div>
                    <input type="hidden" name="cardid" value="<?php echo $cardxx['cardid']; ?>" lay-verify="number">
                    <div class="layui-col-md5" style="text-align: center;">

                        <div class="layui-row" style="margin:130px auto 50px;">
                            <label class="layui-form-label">开始日期：</label>
                            <div class="layui-col-md6">
                                <input class="layui-input" name="starttime" id="start" type="text" placeholder="年-月-日"
                                       value="" readonly lay-verify="required|date">
                            </div>
                        </div>


                        <div class="layui-row">
                            <label class="layui-form-label">终止日期：</label>
                            <div class="layui-col-md6">
                                <input class="layui-input" name="endtime" id="end" type="text" placeholder="年-月-日"
                                       value=""
                                       readonly lay-verify="required|date">
                            </div>
                        </div>
                    </div>
                </div>
                <?php $__FOR_START_1349525907__=0;$__FOR_END_1349525907__=$cardxx['cardmember'];for($i=$__FOR_START_1349525907__;$i < $__FOR_END_1349525907__;$i+=1){ ?>
                <div class="layui-form-item" style="margin-bottom:80px;">
                    <div class="layui-col-md5" style="text-align: center;">
                        <div class="site-photo-flow">
                            <input type="hidden" name="photo[]" value="" lay-verify="photo">
                            <video autoplay="" width="200" height="200" style="border:1px solid #ccc;"></video>
                            <canvas style="display: none;margin:auto;margin-bottom:2px;">预览</canvas>
                            <button type="button" class="layui-btn snap"  style="margin-top:10px;">
                                点击拍摄个人照
                            </button>
                        </div>
                    </div>
                    <div class="layui-col-md5">
                        <div class="layui-row" style="margin-bottom: 15px;margin-top:25px;">

                            <label class="layui-form-label">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</label>
                            <div class="layui-col-md6">
                                <input name="username[]" lay-verify="username" autocomplete="off" placeholder="请输入姓名"
                                       class="layui-input" type="text" id="username">
                            </div>

                        </div>
                        <div class="layui-row" style="margin-bottom: 15px;">
                            <label class="layui-form-label">身份证号：</label>
                            <div class="layui-col-md6">
                                <input name="shenfenz[]" id="shenfenz" placeholder=""
                                       autocomplete="off"
                                       class="layui-input" type="text">
                            </div>

                        </div>
                        <div class="layui-row" style="margin-bottom: 15px;">
                            <label class="layui-form-label">手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：</label>
                            <div class="layui-col-md6">
                                <input name="phone[]" id="phone" autocomplete="off" class="layui-input"
                                       type="tel" value="">
                            </div>
                        </div>

                    </div>


                </div>
                <?php } ?>


            </div>


        </div>


        <div id="bott" class="layui-row" style="margin-bottom:30px; margin-top:50px;">
            <div class="layui-col-md5" style="text-align: center;">
                <button class="layui-btn layui-btn-normal layui-btn-radius" type="reset" id="reset">重置</button>
            </div>
            <div class="layui-col-md3">
                <button class="layui-btn layui-btn-big layui-btn-radius" lay-submit lay-filter="add" id="btnSend">
                    保存
                </button>
            </div>


        </div>
    </form>
</div>
</div>
<div class="footer noprint">
    <p>版权所有 © 2017 宁波神凤海洋世界有限公司</p>
</div>
<script type="text/javascript" src="__STATIC__/jeDate/jedate.js" charset="utf-8"></script>
<script src="__STATIC__/layui/layui.js"></script>
<script>
    layui.use(['form', 'layedit', 'laydate'], function () {
        var form = layui.form
            , layer = layui.layer
            , layedit = layui.layedit
            , laydate = layui.laydate;


        //自定义验证规则
        form.verify({
            username: function (value) {
                if (value.length < 2) {
                    return '姓名至少得2个字符啊';
                }
            },
            photo:function(v){
                if (v.length<3){
                    return "请上传照片";
                }
            }

        });
        form.on('submit(add)', function (data) {
            // console.log(data.form); //被执行提交的form对象，一般在存在form标签时才会返回
            console.log($(data.form).serialize());

            $.post("<?php echo url('index/addcard'); ?>",$(data.form).serialize(),function(res){
                if (res.code != 0) {
                    layer.alert("提交数据成功");
                    // location.href = "chakan.html?id=" + res.code;
                } else {
                    layer.alert("提交数据失败");
                }
            });
            return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
        });

    });
</script>
<script>
    // const width = 200;
    // const height = 200;
    var xvideo, vwidth, vheight, xcanvas, docvideo, doccanvas, ative;
    var mediaStreamTrack = null;
    var visplay = false;
    //访问摄像头
    if (navigator.mediaDevices.getUserMedia || navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia) {

        //调用用户媒体设备, 访问摄像头
        // getUserMedia({video: {width: 200, height: 200}}, success, error);
    } else {
        alert('不支持访问用户媒体');
    }

    //访问用户媒体设备的兼容方法
    function getUserMedia(constraints, success, error) {
        if (navigator.mediaDevices.getUserMedia) {
            //最新的标准API
            navigator.mediaDevices.getUserMedia(constraints).then(success).catch(error);
        } else if (navigator.webkitGetUserMedia) {
            //webkit核心浏览器
            navigator.webkitGetUserMedia(constraints, success, error)
        } else if (navigator.mozGetUserMedia) {
            //firfox浏览器
            navigator.mozGetUserMedia(constraints, success, error);
        } else if (navigator.getUserMedia) {
            //旧版API
            navigator.getUserMedia(constraints, success, error);
        }
    }

    //成功回调
    function success(stream) {
        //兼容webkit核心浏览器
        var CompatibleURL = window.URL || window.webkitURL;
        //将视频流设置为video元素的源
        // console.log(stream);
        // docvideo.src = CompatibleURL.createObjectURL(stream);
        docvideo.srcObject = stream;
        mediaStreamTrack = stream.getTracks()[0];
        // console.log(mediaStreamTrack);
        // console.log(xvideo);
        docvideo.play();
    }

    //失败回调
    function error(error) {
        console.log(error);
        console.log("访问用户媒体设备失败");
    }

    function funClose() {
        mediaStreamTrack.stop();
    }

    $('.snap').click(function () {
        ative = $(this);
        xvideo = $(this).siblings("video");
        docvideo = $(this).siblings("video").get(0);
        xcanvas = $(this).siblings('canvas');
        doccanvas = $(this).siblings('canvas').get(0);
        vwidth = xvideo.width();
        vheight = xvideo.height();
        if (visplay === false) {
            xvideo.show();
            xcanvas.hide();
            getUserMedia({video: {width: vwidth, height: vheight}}, success, error);
            visplay = true;
            $(this).text("点击拍摄");
        } else {
            drawCanvasImage();
        }
    });

    function drawCanvasImage() {
        var num=1;
        const photo = xcanvas.siblings("input");
        const context = doccanvas.getContext('2d');
        doccanvas.width = vwidth;
        doccanvas.height = vheight;
        context.drawImage(docvideo, 0, 0, vwidth, vheight, 0, 0, vwidth, vheight);
        //获取图片，数据格式为base64
        const imageData = doccanvas.toDataURL("image/jpeg");
        const imgStr = imageData.substr(23);
        //预留代码，目前百度人脸检测数量不管是几个人始终返回1，待修复后启用
        // if (photo.attr("name")=="groupphoto"){
        //     num=<?php echo $cardxx['cardmember']; ?>;
        // }
        // layer.msg(num);
        $.post('<?php echo url("api/verifyfaces"); ?>', {faces: imgStr,membernum:num}, function (data) {
            if (data.error_code != 0) {
                photo.val("");
                layer.alert("图片不通过," + data.error_msg);
                isremake(0);
            } else {
                layer.msg("图片通过");
                photo.val(imgStr);
                isremake(1);
            }
        });

    }

    function isremake(num) {
        if (num == 1) {
            xvideo.hide();
            ative.text("重拍");
            xcanvas.show();
            funClose();
            visplay = false;
        }
    }


    //重置输入框
    $('#reset').click(function () {
        $('#username').val("");
        $('#shenfenz').val("");
        $('#phone').val("");
        $('#start').val("");
        $('#end').val("");
    });


</script>
<script>


    jeDate({
        dateCell: "#start",
        // isinitVal:true,
        format: "YYYY-MM-DD",
        isTime: false,
        choosefun: function (val) {
            var bs = shijianjiajian(val, 'y', 1);
            var end = shijianjiajian(bs, 'd', -1);
            $('#end').val(end);
        }
    });
    jeDate({
        dateCell: "#end",
        // isinitVal:true,
        format: "YYYY-MM-DD",
        isTime: false
    });
    // $('#btnSend').click(function () {
    //     var reqjson = {};
    //     reqjson.name = $.trim($('#username').val());
    //     reqjson.cardid = 1;
    //     reqjson.shenfenz = $.trim($('#shenfenz').val());
    //     reqjson.phone = $.trim($('#phone').val());
    //     reqjson.starttime = $('#start').val();
    //     reqjson.endtime = $('#end').val();
    //     reqjson.groupphoto = $.trim($("input[name='groupphoto']").val());
    //     reqjson.photo1 = $.trim($("input[name='photo1']").val());
    //     var msg = "";
    //     // if (reqjson.name == "") {
    //     //     msg = "请填写姓名";
    //     // } else if (reqjson.zhonglei == "") {
    //     //     msg = "请选择个体";
    //     // } else if (reqjson.shenfenz == "") {
    //     //     msg = "请填写身份证号";
    //     // } else if (reqjson.phone == "") {
    //     //     msg = "请填写手机号";
    //     // } else if (reqjson.starttime == "") {
    //     //     msg = "请选择时间";
    //     // } else if (reqjson.endtime == "") {
    //     //     msg = "请选择时间";
    //     // } else if (reqjson.groupphoto == "") {
    //     //     msg = "请拍摄制卡照";
    //     // } else if (reqjson.photo1 == "") {
    //     //     msg = "请拍摄个人照";
    //     // }
    //     // if (msg != "") {
    //     //     layer.alert(msg);
    //     //     exit();
    //     //     return false;
    //     // }
    //     $.ajax({
    //         type: "POST",
    //         url: "<?php echo url('index/addcard'); ?>",
    //         data: reqjson,
    //         dataType: 'json',
    //         beforeSend: function (xhr) {
    //             //该值为Login服务端返回,这个DEMO为暂时写死数据库中存在的值
    //         },
    //         success: function (data) {
    //             console.log(data);
    //             if (data.code != 0) {
    //                 layer.alert("提交数据成功");
    //                 location.href = "chakan.html?id=" + data.code;
    //             } else {
    //                 layer.alert("提交数据失败");
    //             }
    //
    //         },
    //         error: function (message) {
    //             // var retMsg = message.responseJSON;
    //             // $("#request-process-patent").html("提交数据失败:" + retMsg.msg);
    //         }
    //     });
    // });


</script>


</body>
</html>