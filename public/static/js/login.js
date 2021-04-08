     $(function(){   
	// 为看不清楚绑定事件  
//        $("#see").click(function(){  
//            $("#vimg").attr("src", "${ctx}/verify.action?random=" + Math.random());  
//        });  
          
        // 为验证码绑定click与mouseover  
//        $("#vimg").mouseover(function(){  
//            $(this).css("cursor", "pointer");  
//        }).click(function(){  
//            $("#see").trigger("click");  
//        });  
          
        // 登录验证  
        $("#submit").click(function(){  
            // 做表单输入校验  
            var userId = $("#username").val();  
            var password = $("#password").val();  
            var code = $("#code");  
            var msg = "";
            if ($.trim(userId) == ""){  
                msg = "用户名不能为空！";  
                $('username').focus();  
            }else if ($.trim(password) == ""){
                msg = "密码不能为空！";  
                $('password').focus();  
            }else if (!/^\w{0,20}$/.test($.trim(password))){  
                msg = "密码格式不正确！";  
                $('password').focus();  
            }
            
//            else if ($.trim(code.val()) == ""){  
//                msg = "验证码不能为空！";  
//                code.focus();  
//            }else if (!/^[0-9a-zA-Z]{4}$/.test($.trim(code.val()))){  
//                msg = "验证码格式不正确！";  
//                code.focus();  
//            }  
            if (msg != ""){  
                alert(msg);
                return false;
            }else{
            	$("#submit").trigger("click");
            }      
        });  
          
        // 为document绑定onkeydown事件监听是否按了回车键  
        $(document).keydown(function(event){  
            if (event.keyCode === 13){ // 按了回车键  
                $("#submit").trigger("click");  
            }  
        }); 
     });