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
            	系统首页&nbsp;&nbsp; <small>欢迎使用个人博客系统 </small>
         </div>
         
         <div class="catalog">
             <a href="">首页 &nbsp;&nbsp;>&nbsp;&nbsp;文章列表</a> 
         </div>
         
             <div class="parts" style="width:574px;margin-left:20px;height:156px;">
             <h style="width:553px">搜索</h>
             <form id="search-news" action="" method="post">
                   &nbsp;&nbsp;<span>搜索选项</span>&nbsp;&nbsp;:
                   <select id="option" name="option-key" class="select-control">
                        <option selected value="0">按标题：</option>
                        <option value="1">按上传者:</option>
                        <option value="2">阅读量</option>
                    </select>
                    
                    <input type="text" name="key" class="select-control" style="width:230px;"/>
                    <input type="submit" id="sea-btn" value="搜索"/>
                    
                    &nbsp;&nbsp;<span>选择模块</span>&nbsp;&nbsp;: 
                    <select id="option" name="module" class="select-control" style="margin-top:-12px">
                       <option value="0" selected>看电影</option>
                       <option value="1">校园活动</option>
                    </select>
                    </br>  </br>
                     &nbsp;&nbsp;<span>对当前结果</span>&nbsp;&nbsp;: 
                     <font><a href="">按发布时间排序</a></font>  &nbsp;&nbsp;<font><a href="">按阅读量排序</a></font>&nbsp;&nbsp;<font><a href="">按最近修改排序</a></font>
             
             </form>
         </div>
         <div class="parts">
            <div class="artile-list">
               <h>文章列表</h>
                  <table>
                    <tr>
                       <th class="first">编号</th>
                       <th class="first">标题</th>
                       <th class="first">作者</th>
                       <th class="first">内容</th>
                       <th class="first">所属模块</th>
                       <th class="first">是否推荐</th>
                       <th class="first">阅读次数</th>
                       <th class="first">更新时间</th>
                       <th class="first">操作</th>
                    
                    </tr>
                   <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				    	<th><?php echo ($vo["aid"]); ?></th><th><?php echo ($vo["atitle"]); ?></th><th><?php echo ($vo["aauthor"]); ?></th><th><?php echo (subtext(strip_tags($vo["acontent"]),10)); ?></th><th><?php echo ($vo['Module']['mname']); ?></th><th><?php echo ($vo['atui']); ?></th><th><?php echo ($vo['atime']); ?></th><th><?php echo ($vo['aupdate']); ?></th><th><a href="/blog/index.php/Admin/Article/delete/id/<?php echo ($vo["aid"]); ?>" onclick="return confirm('确定要删除这篇文章吗?');">删除&nbsp;</a><a href="/blog/index.php/Admin/Article/edit/id/<?php echo ($vo['aid']); ?>">编辑</a></th>
				    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                   
                </table>
                
            <?php echo ($page); ?>
              
            </div>
         
         </div>
         
      </div>
    </body>
    
    </html>