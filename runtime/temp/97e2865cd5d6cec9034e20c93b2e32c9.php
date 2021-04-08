<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\index\dayin.html";i:1587974369;s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\header.html";i:1588070741;s:82:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\daohang.html";i:1588552605;s:81:"D:\phpstudy_pro\WWW\nianka_v2\public/../application/index\view\common\footer.html";i:1587707976;}*/ ?>
﻿<!doctype html>
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
<link rel="stylesheet" href="__STATIC__/css/children.css">
</head>
<style>
#home{background:#62b5d7}
select{width:100%;height:38px;border:1px solid #e6e6e6;}
</style>
<script>
function printpreview(){
  // 打印页面预览
  wb.execwb(7,1);
}

function preview(oper) { 
if (oper < 10){
PageSetup_Null();
bdhtml=window.document.body.innerHTML;//获取当前页的html代码 
sprnstr="<!--startprint"+oper+"-->";//设置打印开始区域 
eprnstr="<!--endprint"+oper+"-->";//设置打印结束区域 
prnhtml=bdhtml.substring(bdhtml.indexOf(sprnstr)+18); //从开始代码向后取html 

prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));//从结束代码向前取html 
window.document.body.innerHTML=prnhtml;

window.print(); 
window.document.body.innerHTML=bdhtml; 

}
 else{ 
window.print(); 
} 

}



var HKEY_Root,HKEY_Path,HKEY_Key;
HKEY_Root="HKEY_CURRENT_USER";
HKEY_Path="\\Software\\Microsoft\\Internet Explorer\\PageSetup\\";
//设置网页打印的页眉页脚为空
function PageSetup_Null()
{
try
{
var Wsh=new ActiveXObject("WScript.Shell");
HKEY_Key="header";
Wsh.RegWrite(HKEY_Root+HKEY_Path+HKEY_Key,"");
HKEY_Key="footer";
Wsh.RegWrite(HKEY_Root+HKEY_Path+HKEY_Key,"");
}
catch(e)
{

}
}
//设置网页打印的页眉页脚为默认值
function PageSetup_Default()
{
try
{
var Wsh=new ActiveXObject("WScript.Shell");
HKEY_Key="header";
Wsh.RegWrite(HKEY_Root+HKEY_Path+HKEY_Key,"&w&b页码,&p/&P");
HKEY_Key="footer";
Wsh.RegWrite(HKEY_Root+HKEY_Path+HKEY_Key,"&u&b&d");
}
catch(e)
{}
}





</script>

<script language="javascript">  
var HKEY_Root,HKEY_Path,HKEY_Key;   
HKEY_Root="HKEY_CURRENT_USER";   
HKEY_Path="\\Software\\Microsoft\\Internet Explorer\\PageSetup\\";   
//设置网页打印的页眉页脚为空 ，仅IE浏览器可用  
function PageSetup_Null()   
{   
    try   
    {   
        var Wsh=new ActiveXObject("WScript.Shell");   
        HKEY_Key="header";   
        Wsh.RegWrite(HKEY_Root+HKEY_Path+HKEY_Key,"");   
        HKEY_Key="footer";   
        Wsh.RegWrite(HKEY_Root+HKEY_Path+HKEY_Key,"");   
    }   
    catch(e)   
    {}   
}   
  
//设置网页打印的页眉页脚为默认值 ，仅IE浏览器可用  
function PageSetup_Default()   
{   
    try   
    {   
        var Wsh=new ActiveXObject("WScript.Shell");   
        HKEY_Key="header";   
        Wsh.RegWrite(HKEY_Root+HKEY_Path+HKEY_Key,"&w&b页码,&p/&P");   
        HKEY_Key="footer";   
        Wsh.RegWrite(HKEY_Root+HKEY_Path+HKEY_Key,"&u&b&d");   
    }   
    catch(e)   
    {}   
}   
PageSetup_Default();   
  
  
//打印代码  
   function Print(obj)     
    {      
        var str = document.getElementById(obj).innerHTML;     //获取需要打印的页面元素  
        str ="<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'></head><body>"+str+"</body></html>";                                                
        var pwin=window.open("Print.htm","print");  
    PageSetup_Null();//设置页眉和页脚为空  
    //PageSetup_Default();//设置页眉和页脚为默认值  
          
        pwin.document.write(str);  
        pwin.document.close();                   //这句很重要，没有就无法实现    
        pwin.print();      
    }  
</script>

<script language="javascript"> 
function printsetup(){ 
// 打印页面设置 
wb.execwb(8,1); 
} 
function printpreview(){ 
// 打印页面预览 
wb.execwb(7,1); 
} 
function printit() 
{ 
if (confirm('确定打印吗？')){ 
wb.execwb(6,6);
} 
} 
</script> 
<style type="text/css" media="print"> 
.noprint{display : none } 
</style> 
<body>
<!-- <OBJECT classid="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2" height="0" id="wb" name="wb" width="0"></OBJECT>    -->     
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
 <div class="right" style="min-height:700px;">
  <div class="layui-frome">
     <h1 class="noprint">打印预览</h1>
	 <HR class="noprint">
    <div class="con4" style="margin:auto;text-align:center;">
    <!--startprint1-->
      <div style="width:197px;height:auto;color:#000;" id="page1">
            <img style="width:100%;height:115px;" src="__ROOT__<?php echo $clubxx['photo']; ?>">
          <div style="width:100%;height:auto;margin-top:1px;">
            <div style="width:30%;height:30px;float:left;">
              <li>&nbsp;&nbsp;姓名：</li>
            </div>
            <div style="width:70%;height:30px;float:left;">
              <?php 
                for ($i=0; $i <count($memberxx) ; $i++) {
              ?>
              <li style="width:50%;float:left;"><?=$memberxx[$i]['membername']?></li>
              <?php 
                }
               ?>
            </div>
            <div style="float:left;width:100%;margin-top:2px;">
              <li style="width:30%;float:left;">&nbsp;&nbsp;日期：</li>
              <li style="width:40%;float:left;"><?=$clubxx['enddate']?></li>
            </div>
          </div>

         
      </div>
      <!--endprint1-->
	  </div>

	   <div id="bott" class="noprint">
	
      <ul>
        <!-- <li><button class="layui-btn layui-btn-normal layui-btn-radius" onclick="printpreview()">打印预览</button></li> -->
        <li><button class="layui-btn layui-btn-normal layui-btn-radius" id="daying" onclick="preview(1)">打印</button></li>
        
        <li><button class="layui-btn layui-btn-big layui-btn-radius" lay-submit="" lay-filter="demo1" id="goback">返回</button></li>
        <!-- <li><button class="layui-btn layui-btn-warm layui-btn-radius">打印</button></li> -->
         
<!-- <input type=button name=button_print value="打印" class="noprint" onclick="javascript:printit()"> 
<input type=button name=button_setup value="打印页面设置" class="noprint" onclick="javascript:printsetup();"> 
<input type=button name=button_show value="打印预览" class="noprint" onclick="javascript:printpreview();">  -->
      </ul>
	 
    </div>
	     
  </div>
 

<div class="footer noprint">
    <p>版权所有 © 2017 宁波神凤海洋世界有限公司</p>
</div>



<script>
  $('#goback').click(function(){
    history.back(-1);
  });

</script>
</body>
</html>