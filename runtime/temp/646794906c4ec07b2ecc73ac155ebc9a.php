<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:82:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\index\editcard.html";i:1588729903;s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\header.html";i:1588070741;s:82:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\daohang.html";i:1588552605;s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\footer.html";i:1587707976;}*/ ?>
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
</head>
<style>
    #list {
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
<div class="right layui-main layui-tab layui-tab-brief" style="min-height:700px;padding:15px;margin-top:0px;">
    <form class="layui-form layui-form-pane">
        <div style="padding:15px;">
            <h1>年卡详情</h1>
        </div>
        <HR>
        <input type="hidden" name="cardid" value="<?php echo $clubxx['cardid']; ?>">
        <input type="hidden" name="cardno" value="<?php echo $clubxx['cardno']; ?>">
        <div>
            <div class="layui-form-item">
                <div class="layui-col-md5">
                    <div class="site-groupphoto-flow">
                        <input type="hidden" name="groupphoto" value="" >
                        <img src="__ROOT__<?php echo $clubxx['photo']; ?>">
                        <video autoplay="" width="591" height="345" style="display: none"></video>
                        <canvas style="display: none;margin:auto;margin-bottom:2px;">预览</canvas>
                        <button type="button" class="layui-btn snap" style="margin-top:10px;">点击拍制卡照</button>
                    </div>
                </div>
                <div class="layui-col-md5">
                    <div class="layui-row" style="margin:130px auto 50px;">
                        <label class="layui-form-label">开始日期：</label>
                        <div class="layui-col-md7">
                            <input class="layui-input" name="starttime" id="start" type="text" placeholder="年-月-日"
                                   value="<?php echo $clubxx['startdate']; ?>" readonly lay-filter="*">
                        </div>
                    </div>

                    <div class="layui-row">
                        <label class="layui-form-label">终止日期：</label>
                        <div class="layui-col-md7">
                            <input class="layui-input" name="endtime" id="end" type="text" placeholder="年-月-日"
                                   value="<?php echo $clubxx['enddate']; ?>" readonly lay-filter="*">
                        </div>
                    </div>
                </div>

            </div>
            <?php if(is_array($memberxx) || $memberxx instanceof \think\Collection || $memberxx instanceof \think\Paginator): $k = 0; $__LIST__ = $memberxx;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>

            <div class="layui-form-item" style="margin-bottom:80px;">
                <input type="hidden" name="id[]"  value="<?php echo $vo['id']; ?>">
                <div class="layui-col-md5">
                    <div class="site-photo-flow">
                        <input type="hidden" name="photo[]"  value="">
                        <img src="__ROOT__<?php echo $vo['photo']; ?>" alt="">
                        <video autoplay="" width="200" height="200" style="display: none"></video>
                        <canvas style="display: none;margin:auto;margin-bottom:2px;">预览</canvas>
                        <button type="button" class="layui-btn snap"  style="margin-top:10px;">点击拍摄个人照</button>
                    </div>
                </div>
                <div class="layui-col-md5">
                    <div class="layui-row" style="margin-bottom: 15px;margin-top:25px;">
                        <label class="layui-form-label">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</label>
                        <div class="layui-col-md7">
                            <input name="username[]"  autocomplete="off" placeholder="请输入姓名"
                                   class="layui-input" type="text"  value="<?php echo $vo['membername']; ?>" lay-filter="*">
                        </div>
                    </div>
                    <div class="layui-row" style="margin-bottom: 15px;">
                        <label class="layui-form-label">身份证号：</label>
                        <div class="layui-col-md7">
                            <input name="shenfenz[]" id="shenfenz"  placeholder="" autocomplete="off"
                                   class="layui-input" type="text" value="<?php echo $vo['idnumber']; ?>" lay-filter="*">
                        </div>
                    </div>
                    <div class="layui-row" style="margin-bottom: 15px;">
                        <label class="layui-form-label">手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：</label>
                        <div class="layui-col-md7">
                            <input name="phone[]" id="phone"  autocomplete="off" class="layui-input"
                                   type="tel" value=<?php echo $vo['phone']; ?> lay-filter="*">
                        </div>
                    </div>

                </div>

            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>



        </div>










        <div id="bott" class="layui-row" style="margin-bottom:30px;">
            <div class="layui-col-md5" style="text-align: center;">
                <button class="layui-btn layui-btn-normal layui-btn-radius" type="reset" id="submit" lay-submit lay-filter="modify" >修改</button>
            </div>
            <div class="layui-col-md3" style="text-align: center;">
                <button class="layui-btn layui-btn-big layui-btn-radius"
                        id="godayin">去打印
                </button>
            </div>
        </div>
    </form>
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



            });
            form.on('submit(modify)', function(data){
                // console.log(data.form); //被执行提交的form对象，一般在存在form标签时才会返回
                // console.log($(data.form).serialize()); //当前容器的全部表单字段，名值对形式：{name: value}
                $.post("<?php echo url('index/modifycard'); ?>",$(data.form).serialize(),function(res){
                    if (res===true){
                        layer.msg("修改成功");
                    }else{
                        layer.msg("修改失败");
                    }
                });
                return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
            });

        });
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


        $('#godayin').click(function () {
            window.location.href = "chakan.html?id=" + <?php echo $clubxx['cardno']; ?>;
            return false;
        });
    </script>
    <script>
        // const width = 200;
        // const height = 200;
        var xvideo, vwidth, vheight, xcanvas, docvideo, doccanvas, ative;
        var mediaStreamTrack = null;
        var visplay = false;
        var mphoto = [];
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
                $(this).siblings("img").hide();
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
            let num=1;
            const photo = xcanvas.siblings("input");
            const context = doccanvas.getContext('2d');
            doccanvas.width = vwidth;
            doccanvas.height = vheight;
            context.drawImage(docvideo, 0, 0, vwidth, vheight, 0, 0, vwidth, vheight);
            //获取图片，数据格式为base64
            const imageData = doccanvas.toDataURL("image/jpeg");
            const imgStr = imageData.substr(23);

            $.post('<?php echo url("api/verifyfaces"); ?>', {faces: imgStr, membernum: num},function (data) {
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


</body>
</html>