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
             <a href="/blog/index.php/Admin/Feel/logOut"><img src="/blog/Public/images/static/LoginOut.png"><font class="go-out">退出</font></a>
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
             <a href="">首页 &nbsp;&nbsp;>&nbsp;&nbsp;微语列表</a> 
         </div>
         
           
         <div class="parts">
            <div class="artile-list">
               <h>留言列表</h>
                  <table>
                    <tr>
                       <th class="first">编号</th>
                       <th class="first">微语内容</th>
                       <th class="first">留言时间</th>
                       <th class="first">操作</th>
                    
                    </tr>
                   <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				    	<th><?php echo ($vo["fid"]); ?></th><th><?php echo (subtext(strip_tags($vo["fcontent"]),30)); ?></th><th><?php echo ($vo['ftime']); ?></th><th><a href="/blog/index.php/Admin/Feel/delete/id/<?php echo ($vo["fid"]); ?>" onclick="return confirm('确定要删除这篇文章吗?');">删除&nbsp;</a><a href="/blog/index.php/Admin/Feel/edit/id/<?php echo ($vo['fid']); ?>">编辑</a></th>
				    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                   
                </table>
                
            <?php echo ($page); ?>
              
            </div>
         
         </div>
         
            
             <div class="parts">
              <div class="module-add">
                 <h>发表微语</h>
                 <form action="/blog/index.php/Admin/Feel/add" method="post"  id="module-form">
                     <script type="text/plain" id="editor" name="content" style="width:100%;">
  				     
                       </script>                      
                      <input type="submit" id="btn" value="添加" style="position:relative;top:170px;left:400px;"/>
                      <div id="msg"></div>
                 </form>
              </div>
           </div>
         
      </div>
       <script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>
   <script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('editor');
 
   </script>
    </body>
    
    </html>