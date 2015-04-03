<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
   <head>
   	  <meta charset="utf-8">
      <title>SunShine个人博客后台登陆</title>
      <link rel="stylesheet" type="text/css" href="/blog/Public/Css/login.css"/>
   </head>
   <body>
       <div id="login-box">
       <form action="/blog/index.php/Admin/Login/recheck" method="post" id="login-form">
          <label for="username"></label>
          <input type="text" name="username" id="username" placeholder="Username" autocomplete="off"/></br>
          <label for="password"></label>
          <input type="password"  name="password" id="password"  placeholder="Password" autocomplete="off"/></br>
          <input type="submit" id="login-btn"  value="Login"/>
           <div id="msg"></div>
       </form>
       </div>
   
     <script type="text/javascript"  src="/blog/Public/Js/jquery.min.js"></script>
         <script type="text/javascript">
            $(function(){
                $("#login-form").submit(function(){
                 var username=$("#username");
        	   	 var password=$("#password");
        	   	 if(username.val()=="")
	    		 {
	    		     $("#msg").text("请填写登录用户名!");
	    		     username.focus();
	    		     return false;
	    		 }
        	   	 if(password.val()=="")
	    		 {
	    		     $("#msg").text("请填写登陆密码!");
	    		     password.focus();
	    		     return false;
	    		 }
        	   	   $.ajax({
            	    	 url: "/blog/index.php/Admin/Login/recheck",
            	    	 type: 'post',
            	    	 data: {
            	    		 username: username.val(),
            	    		 password: password.val()
            	    	 },
            	    	 success:function(data){
            	    		 if(data['status'] == '1')
            	    			 {
            	    			    $("#msg").text("登录成功!").css("color","green");
            	    			     window.location.href="/blog/index.php/Admin/Index/index";
            	    			 }else if(data['status']== '0')
        	    			   {
        	    			       $("#msg").text("用户名或密码错误!");
        	    			   }
            	    	 },
            	     });
        	   	   return false;
                });
            });
       </script>
   </body>

</html>