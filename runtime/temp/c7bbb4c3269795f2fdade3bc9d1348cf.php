<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\phpstudy_pro\WWW\bsl_admin\public/../application/index\view\index\login.html";i:1491712298;}*/ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/static/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/static/css/login.css" />
<title>年卡信息管理系统</title>

</head>
<body>

<div class="login-box">
	<div><h1><img src="/static/images/logo5.png" alt="logo" /></h1></div>
	<form method="post" action="loginyz.html">
		<div class="name">
			<label>账 号：</label>
			<input type="text" name="username" id="username" tabindex="1" autocomplete="off" placeholder="手机/用户名/邮箱" value="<?php echo $data[0]; ?>" />
		</div>
		<div class="password">
			<label>密  码：</label>
			<input type="password" name="password" maxlength="16" id="password" tabindex="2" placeholder="密码" value="<?php echo $data[1]; ?>"/>
		</div>

		<div class="remember">
			<input type="checkbox" name="jzmm" id="remember" tabindex="4">
			<label>记住密码</label>
		</div>
		<div class="login">
			<button type="submit" tabindex="5" id="submit">登录</button>
		</div>
	</form>
</div>

</body>
<script src="/static/js/jquery-3.1.1.js"></script>
<script src="/static/js/login.js"></script>
</html>
