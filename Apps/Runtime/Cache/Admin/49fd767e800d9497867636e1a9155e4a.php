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
             <a href="/blog/index.php/Admin/Article/logOut"><img src="/blog/Public/images/static/LoginOut.png"><font class="go-out">退出</font></a>
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
            	添加资讯&nbsp;&nbsp; 
      </div>
         
         <div class="catalog">
             <a href="">首页</a>&nbsp;>&nbsp;<a href="">添加资讯</a>
         </div>
         
         <div class="parts">
            <div class="part-desc">
               <h>板块说明</h>
               <p1>你可以在本版块编辑并发布新的文章</p1>
               <p1>添加时，必须指明该文章所属模块</p1>
            </div>
         </div>
 
         
         <div class="parts"">
         <div class="news-add">
            <h>填写信息</h>
            <form action="/blog/index.php/Admin/Article/save" method="post" id="article-form">
			 <script type="text/plain" id="editor" name="content">
  				</script>
  				<div class="text-part">
               <label for="title">*文章标题</label>
               <input type="text" name="title" id="title" class="box-control" placeholder="填写文章标题" autocomplete="off"/>
               <label for="author">*文章作者/来源</label>
                    <input type="text" name="author" id="author" class="box-control" placeholder="填写文章标题" autocomplete="off"/>
               <label for="belong">文章所属模块</label>
               <select  class="box-control" id="mid" name="mid">
                   <option  value="0" selected>请选择模块</option>
                   <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>"><?php echo ($vo["mname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
               </select>
                <label for="tui">是否推荐</label>
               <input type="radio" name="tui"  value="1" checked style="margin-left:20px;font-size:18px;"/>推荐
               <input type="radio" name="tui" value="0" style="font-size:18px;"/>不推荐
              </br>
               <input type="submit" id="btn" value="发表"/>
               <div id="msg"></div>
               </div>
            </form>
         </div>
         
   </div>
 </div>
   <script type="text/javascript"  src="/blog/Public/Js/jquery.min.js"></script>
   <script type="text/javascript"  src="/blog/Public/Js/admin.js"></script>
   <script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>
   <script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('editor');
 
   </script>
 </body>
 </html>