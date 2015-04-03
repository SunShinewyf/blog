<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
   <title>SunShine 个人博客后台系统</title>
   <meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
   <head>
       <link rel="stylesheet" type="text/css" href="/blog/Public/Css/admin.css"/>
       <link rel="stylesheet" type="text/css" href="/blog/Public/Css/left.css"/>
       <link rel="stylesheet" type="text/css" href="/blog/Public/Css/font-awesome.min.css"/>
       <script type="text/javascript"  src="/blog/Public/Js/jquery.min.js"></script>
	   <script type="text/javascript"  src="/blog/Public/Js/left.js"></script>
	   <script type="text/javascript" charset="utf-8" src="/blog/Public/editor/ueditor.config.js"></script>
       <script type="text/javascript" charset="utf-8" src="/blog/Public/editor/ueditor.all.min.js"> </script>
       <script type="text/javascript" charset="utf-8" src="/blog/Public/editor/lang/zh-cn/zh-cn.js"></script>
       
   </head>
    <body>
      <div id="header">
          <div class="header-left">
              <p style="float:left;">SunShine后台管理系统</p>
          </div>
          <div class="header-right">
             <a  href="/blog/index.php/Home"><img src="/blog/Public/images/static/home.png"><font class="go-home">首页</font></a>
             <a href="/blog/index.php/Admin/Index/logOut"><img src="/blog/Public/images/static/LoginOut.png"><font class="go-out">退出</font></a>
          </div>
      </div>
      


     <div id="sidebar">
            <div class="person">
          <div class="person-img"><img src="/blog/Public/images/static/person.png"/></div>
          <p class="welcome">某某你好</p>
       </div>
	   <div id="left">
		  <ul class="accordion">
	   <li id="zero" class="home"><a href="#zero">首页</a>
	   <li id="one" class="manger"> <a href="#one">管理员管理</a>
		  <ul class="sub-menu">
			<li><a href="/blog/index.php/Admin/Set/index">管理员管理</a></li>
		  </ul>
	   </li>
     <li id="three" class="module"><a href="#three">模块管理</a>
		  <ul class="sub-menu">
			<li><a href="/blog/index.php/Admin/Module/index">模块列表</a></li>
		  </ul>
	   </li>  
	  
	   <li id="three" class="module"><a href="#three">文章管理</a>
		  <ul class="sub-menu">
			<li><a href="/blog/index.php/Admin/Article/index">文章管理</a></li>
			<li><a href="/blog/index.php/Admin/Article/add">添加文章</a></li>
		  </ul>
	   </li>
	    <li id="three" class="module"><a href="#three">留言管理</a>
		  <ul class="sub-menu">
			<li><a href="/blog/index.php/Admin/Message/index">留言列表</a></li>
		  </ul>
	   </li>
	      <li id="three" class="module"><a href="#three">感悟管理</a>
		  <ul class="sub-menu">
			<li><a href="/blog/index.php/Admin/Feel/index">感悟列表</a></li>
		  </ul>
	   </li>
	  </ul>
	  <div class="desc">
	     <p>Powered by 王元芳</p>
	  </div>
	</div>		
     </div>
     <div id="main">
         <div class="page-title">
            	系统首页&nbsp;&nbsp; <small>欢迎使用个人博客系统 </small>
         </div>
         
         <div class="catalog">
             <a href="">首页</a> 
         </div>
         
         <ul class="img-show">
             <li style="margin-left:0px;"><img src="/blog/Public/images/static/communicate.png"/></li>
             <li><img src="/blog/Public/images/static/reback.png"/></li>
             <li><img src="/blog/Public/images/static/create.png"/></li>
             <li><img src="/blog/Public/images/static/web.png"/></li>
         </ul>
         
         <div class="parts">
            <div class="welcome-part">
            <h>欢迎</h>
               <p1>你好！欢迎使用SunShine个人博客后台管理系统</p1></br>
               <p1>某某是你当前登录的用户名。如果你是第一次登录你的帐号，请点击<font><a href="#">更改初始密码</a></font></p1></br>
            </div>
         </div>
         
         <div class="parts">
         <div class="about">
            <h>关于本系统</h>
            <p1>本系统是由华中农业大学沸点工作室王元芳开发,版权归华中农业大学理学院沸点工作室所有。</p1></br>
            <p1>如果您在使用过程中遇到什么问题，或者出现漏洞、错误，请联系我，或者沸点工作室。</p1></br>
            <p1>QQ：2632807692    E-mail：2632807692 @qq.com</p1></br>
            <p1>沸点工作室地址：逸夫楼A405</p1></br>
         </div>
         </div>
     </div>
  
     </body>
   </html>