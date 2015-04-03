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
             <a href="/blog/index.php/Admin/Module/logOut"><img src="/blog/Public/images/static/LoginOut.png"><font class="go-out">退出</font></a>
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
             <a href="">首页 &nbsp;&nbsp;>&nbsp;&nbsp;模块列表</a> 
         </div>
         
         <div class="parts">
            <div class="part-desc">
               <h>板块说明</h>
               <p1>该板块用于显示前台所有的模块，还可以对模块进行删除和编辑</p1>
            </div>
         </div>
         
         
           
         <div class="parts" style="width:540px;">
           <div class="module-list">
              <h style="width:520px">模块列表</h>
              <table style="width:540px">
                 <tr>
                    <th class="first">编号</th>
                    <th class="first">模块名</th>
                    <th class="first">模块所属的父级模块</th>
                    <th class="first">模块备注</th>
                    <th class="first">操作</th>
                 </tr>
               <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<th><?php echo ($vo["mid"]); ?></th><th><?php echo ($vo["mname"]); ?></th><th><?php echo ($vo["parentid"]); ?></th><th><?php echo ($vo["mdesc"]); ?></th><th><a href="/blog/index.php/Admin/Module/delete/id/<?php echo ($vo["mid"]); ?>" onclick="return confirm('确定要删除这个模块吗?');">删除&nbsp;</a><a href="/blog/index.php/Admin/Module/edit/id/<?php echo ($vo['mid']); ?>">编辑</a></th>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </table>
              </div>
           </div>
           
           
             <div class="parts" style="width:492px;margin-left:10px">
              <div class="module-add">
                 <h style="width:472px;">模块添加</h>
                 <form action="/blog/index.php/Admin/Module/update" method="post"  id="module-form">
                      <input type="hidden" name="mid" value="<?php echo ($data['mid']); ?>"/>
                      <label for="name">*模块名</label>
                      <input type="text" name="nickname" id="nickname" value="<?php echo ($data['mname']); ?>" class="box-control" />
                        <label for="parent">*该模块的父级模块</label>
                        <select  class="box-control" id="parentid" name="parentid">
                         <option selected value="0">请选择该模块的父级模块</option>
                             <?php if(is_array($parent)): $i = 0; $__LIST__ = $parent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><option value="<?php echo ($li["mid"]); ?>"  <?php if($li['mid'] == $data['parentid']): ?>selected<?php endif; ?>><?php echo ($li['mname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                      <label for="desc">*模块备注信息</label>
                      <input type="text" class="box-control" id="desc" value="<?php echo ($data['mdesc']); ?>" name="desc" /></br>
                      
                      <input type="submit" id="btn" value="编辑"/>
                      <div id="msg"></div>
                 </form>
              </div>
           </div>
         
  </div>
  
  <script type="text/javascript"  src="/blog/Public/Js/jquery.min.js"></script>
          <script type="text/javascript"  src="/blog/Public/Js/admin.js"></script>
  </body>
  </html>