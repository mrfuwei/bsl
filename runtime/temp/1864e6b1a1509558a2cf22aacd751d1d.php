<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\index\profile.html";i:1588560374;s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\header.html";i:1588070741;s:82:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\daohang.html";i:1588552605;s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\footer.html";i:1587707976;}*/ ?>
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
<link rel="stylesheet" href="__STATIC__/css/profile.css"  media="all">
<style>
  #role{background:#62b5d7}
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
 <div class="right">
  <div class="layui-frome">
     <h1><?php if(@$_GET['username']){echo "编辑用户";}else{echo "新增用户";} ?></h1>
	 <HR>
	 <!--
	 <div class="dom">
	  <img src="images/face/chile.jpg"/>  
	  <img src="images/face/chile.jpg"/> 
	  <img src="images/face/chile.jpg"/> 
	  <img src="images/face/chile.jpg"/> 
	 </div>
	 -->
	 <form class="layui-form" action="adduser.html" method="post">
     
	  <div class="cot">
    <div class="main">
	 <div class="layui-form-item">
      <div class="layui-inline">
          <label class="layui-form-label">用&nbsp;&nbsp;户&nbsp;名：</label>
        <div class="layui-input-inline">
      <input name="username" id="username" lay-verify="username" autocomplete="off" placeholder="请输入用户名" class="layui-input" type="text" value="<?php if(isset($userxx['userid'])){echo  $userxx['userid'];} ?>">
    </div>
      </div>
      <div class="layui-inline">
          <label class="layui-form-label">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</label>
      <div class="layui-input-inline">
          <input name="password" id="password" lay-verify="passowrd" autocomplete="off" class="layui-input" type="text" placeholder="请输入密码" value="123456">
      </div>
      </div>
  </div>
   <div class="layui-form-item">
      <div class="layui-inline">
          <label class="layui-form-label">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</label>
        <div class="layui-input-inline">
          <input name="name" id="name" lay-verify="name" autocomplete="off" placeholder="请输入姓名" class="layui-input" type="text" value="<?php if(isset($userxx['username'])){echo  $userxx['username'];} ?>">
        </div>
      </div>
      <div class="layui-inline">
          <label class="layui-form-label">角色备注：</label>
        <div class="layui-input-inline">
          <input name="juesebeizhu" id="juesebeizhu"  lay-verify="juesebeizhu" autocomplete="off" placeholder="请输入角色备注" class="layui-input" type="text" value="<?php if(isset($userxx['userrole'])){echo  $userxx['userrole'];} ?>">
        </div>
      </div>

   </div>
   <div class="layui-form-item">
      
        <div class="layui-inline">
            <label class="layui-form-label">所属部门：</label>
               <div class="layui-input-inline">
                  <select name="suoshubumen" id="suoshubumen" lay-filter="aihao">
                  <?php if(isset($userxx) == '1'): if(is_array($bumen) || $bumen instanceof \think\Collection || $bumen instanceof \think\Paginator): $i = 0; $__LIST__ = $bumen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['orgid'] == $userxx['orgid']): ?>
                        <option value="<?php echo $vo['orgid']; ?>" selected=""><?php echo $vo['orgname']; ?></option>
                        <?php else: ?>
                        <option value="<?php echo $vo['orgid']; ?>"><?php echo $vo['orgname']; ?></option>
                        <?php endif; endforeach; endif; else: echo "" ;endif; else: if(is_array($bumen) || $bumen instanceof \think\Collection || $bumen instanceof \think\Paginator): $i = 0; $__LIST__ = $bumen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['orgid'] == 0): ?>
                        <option value="<?php echo $vo['orgid']; ?>" selected=""><?php echo $vo['orgname']; ?></option>
                        <?php else: ?>
                        <option value="<?php echo $vo['orgid']; ?>"><?php echo $vo['orgname']; ?></option>
                        <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                    
                  </select>
               </div>
        </div>
    </div>
     
		  <div class="layui-form-item" pane="">
           <label class="layui-form-label">权限设置：</label>
            <div class="layui-input-block">
          <?php if(is_array($quanxianinfo) || $quanxianinfo instanceof \think\Collection || $quanxianinfo instanceof \think\Paginator): $i = 0; $__LIST__ = $quanxianinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <input name="quanxian[<?php echo $vo['btnid']; ?>]" id="<?php echo $vo['btnid']; ?>" value="<?php echo $vo['btnid']; ?>" lay-skin="primary" title="<?php echo $vo['btnname']; ?>" type="checkbox">
          <?php endforeach; endif; else: echo "" ;endif; 
          //var_dump($quanxianinfo);
          if (@$_GET['username']) {
            echo '<input name="ctrlFlag" type="hidden" value="2">';
            echo "\r\n";
            //var_dump($quanxian);
            if (isset($quanxian)) {
              echo "<script>";
              echo "\r\n";
              for ($i=0; $i <count($quanxian) ; $i++) { 
                    echo "$('#".$quanxian[$i]."').attr('checked',true);";
                    echo "\r\n";
              }
              echo "</script>";
            }
            
            
          }else{
            echo '<input name="ctrlFlag" type="hidden" value="1">';
          } 
          ?>

		   </div>
         </div>	
	      <div id="bott">
	       <button class="layui-btn layui-btn-big layui-btn-radius" id="submit">保存</button>
	      <!--  <button class="layui-btn-warm layui-btn-radius" id="goback">返回</button> -->
	      </div>
	  </div>
	   </div>
    </form>
  </div>
  
 </div>
<div class="footer noprint">
    <p>版权所有 © 2017 宁波神凤海洋世界有限公司</p>
</div>
<script src="__STATIC__/layui/layui.js"></script>
<script>
layui.use(['form', 'layedit', 'laydate'], function(){
  var form = layui.form()
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;
  
  //创建一个编辑器
  var editIndex = layedit.build('LAY_demo_editor');
 
  //自定义验证规则
  form.verify({
    title: function(value){
      if(value.length < 5){
        return '卡片名称至少得5个字符啊';
      }
    }
    
  });
  
 
  
  //监听提交
  form.on('submit(demo1)', function(data){
    layer.alert(JSON.stringify(data.field), {
      title: '最终的提交信息'
    })
    return true;
  });
  
  
});
$('#submit').click(function(){
  var username,password,name,juesebeizhu,suoshubumen;
  var msg="";
  username=$('#username').val();
  password=$('#password').val();
  name=$('#name').val();
  juesebeizhu=$('#juesebeizhu').val();
  suoshubumen=$('#suoshubumen').val();
  if (username=="") {
    msg="请填写用户名";
  }else if(password==""){
    msg="请填写密码";
  }else if(name==""){
    msg="请填写姓名";
  }else if(juesebeizhu==""){
    msg="请填写角色备注";
  }else if(suoshubumen==""){
    msg="请选择部门";
  }
  if (msg!='') {
    alert(msg);
    return false;
  };

});

</script>
</body>
</html>