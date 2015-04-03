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
             <a  href="#"><img src="/blog/Public/images/static/home.png"><font class="go-home">首页</font></a>
             <a href="#"><img src="/blog/Public/images/static/LoginOut.png"><font class="go-out">退出</font></a>
          </div>
      </div>
      
  </body>
  </html>

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
			<li><a href="">管理员管理</a></li>
		  </ul>
	   </li>
     <li id="three" class="module"><a href="#three">模块管理</a>
		  <ul class="sub-menu">
			<li><a href="">模块列表</a></li>
			<li><a href="">添加模块</a></li>
		  </ul>
	   </li>  
	   <li id="two" class="info"> <a href="#two">文章分类管理</a>
		  <ul class="sub-menu">
			<li class="word"><a href="">分类列表</a></li>
			<li class="word"><a href="">分类添加</a></li>
		  </ul>
	   </li>
	 
	   
	   <li id="three" class="module"><a href="#three">文章管理</a>
		  <ul class="sub-menu">
			<li><a href="">文章管理</a></li>
			<li><a href="">添加文章</a></li>
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
             <a href="">首页 &nbsp;&nbsp;>&nbsp;&nbsp;修改密码</a> 
         </div>
         
         <div class="parts">
            <div class="part-desc">
               <h>板块说明</h>
               <p1>该板块用于管理员修改密码</p1>
            </div>
         </div>
         
         <div class="parts">
            <div class="change-pwd">
               <h>修改密码</h>
                 <form action="" method="post">
                  <label for="password">*初始密码</label>
                  <input type="password" class="box-control" id="password" placeholder="填写密码" autocomplete="off"/>
                  <label>*确认密码</label>
                  <input type="password" class="box-control"    id="repassword" placeholder="填写确认密码" autocomplete="off"/></br>
                  <input type="submit" id="btn" value="添加"/>
              </form>
            
            </div>
         
         </div>
     </div>
     
     
     </body>
     </html>