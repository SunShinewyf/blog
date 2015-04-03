<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
   <head>
     <title>SunShine个人博客，一个专注于web技术草根的成长之路</title>
     <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
     <link rel="stylesheet" type="text/css" href="/blog/Public/css/style.css"/>
      <script type="text/javascript" charset="utf-8" src="/blog/Public/editor/ueditor.config.js"></script>
       <script type="text/javascript" charset="utf-8" src="/blog/Public/editor/ueditor.all.min.js"> </script>
       <script type="text/javascript" charset="utf-8" src="/blog/Public/editor/lang/zh-cn/zh-cn.js"></script>
       
   </head>


 <body> 
     <div id="header">
         <div class="header-top">
         <div class="left">
             <p class="header-title">SunShine个人博客</p>
             <p1>专注于web开发，注重每一个向上攀登的过程</p1>
         </div>
         
     <!--   <div class="right">
             <form id="index-search" action="" method="post">
                <input type="text" name="index-key" id="index-key" placeholder="请输入关键字进行搜索" autocomplete="off"/>
                <input type="submit" value="搜索" id="search-btn"/>
             </form>
         </div> -->  
         </div>
     
  <ul id="nav">
  
    <li class="jquery_out">
      <div class="jquery_inner">
        <div class="jquery"><a href="/blog/index.php/Home/Index/index">首页</a></div>
      </div>
    </li>
    <?php if(is_array($parent)): $i = 0; $__LIST__ = $parent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/blog/index.php/Home/Index/articlelist/e/<?php echo ($vo["mid"]); ?>"><?php echo ($vo['mname']); ?></a>
      <ul class="drop">
       <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i; if($vo['mid'] == $li['parentid']): ?><li><a href="/blog/index.php/Home/Index/GetAll/e/<?php echo ($li["mid"]); ?>"><?php echo ($li['mname']); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>  
      </ul>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
   <li><a href="/blog/index.php/Home/Index/message">留言板</a>
    <li><a href="/blog/index.php/Home/Index/feel">个人微语</a>
  </ul>
   
  </div>
     
     <div id="container">
        <div class="main-left">
            <div class="mess-list">
               <h1>留言列表</h1>
               <?php if(is_array($mess)): $i = 0; $__LIST__ = $mess;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$me): $mod = ($i % 2 );++$i;?><div class="mess-box">
                   <p1><font class="author">昵称:&nbsp;&nbsp;<?php echo ($me["mauthor"]); ?></font>&nbsp;&nbsp;&nbsp;&nbsp;<font class="time">留言时间:&nbsp;&nbsp;<?php echo ($me["mtime"]); ?></font></p1>
                   <p><?php echo ($me["mcontent"]); ?></p>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
               <div class="pages">
                        <?php echo ($page); ?>
                </div>
            </div>
            
        <div class="add-box">
           <h1>提交留言</h1>
           <form id="mess-box" action="/blog/index.php/Home/Index/add" method="post">
            <label for="nickname">昵称:</label>
            <input type="text" class="text-type" name="nickname" id="nickname"/>&nbsp;&nbsp;<font style="color:red">*</font></br>
            <label for="content">内容:</label>
            <script type="text/plain" id="editor" name="content">
  		    </script>
  		    <input type="submit" id="sub-btn" value="提交留言"/>
  		    <div id="msg"></div>
  		   </form>
        </div>
               
        </div>
        
       
        <div class="main-right">
           <div class="article-sort">
           <div class="content">
               <div class="type"  id="tui"><a href="">推荐文章</a></div>
               <div class="type" id="hot"><a href="">最新文章</a></div>
               <ul class="title-list">
                
               </ul>
            </div>
           </div>
           
         
        
           <div class="article-sort" style="margin-top:20px;height:295px;margin-bottom:20px;">
            <div class="content">
                 <div class="theme">链接</div>
                     <ul class="link-list">
                    <li><a href="http://jw.hzau.edu.cn/">本科生教务系统</a></li>
                     <li><a href="http://blog.163.com/m13545360016_1/">网易个人博客</a></li>
                     <li><a href="http://lib.hzau.edu.cn/">图书馆</a></li>
                     <li><a href="http://www.52feidian.net/">沸点官网</a></li>
                     <li><a href="http://sport.hzau.edu.cn/">华农体育部</a></li>
                     <li><a href="https://github.com/">github官网</a></li>
                     <li><a href="https://phphub.org/">PHPHub</a></li>
                     <li><a href="http://www.php100.com/">PHP100中文网</a></li>
                     <li><a href="http://www.nowamagic.net/librarys/veda/cate/WebDesign">WebDesign</a></li>
                     <li><a href="http://www.51cto.com/">51cto教程</a></li>
             </ul>
           </div>
           
             
        </div>  
     
     </div>

 <div id="footer">
   <p>Powerby SunShine &nbsp;&nbsp;&nbsp 鄂ICP备15002472号-1</p>
    <p>CopyRight©2015 版权所有：SunShine</p>
</div>
 <script type="text/javascript"  src="/blog/Public/Js/jquery.min.js"></script>
    <script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('editor');
 
   </script>
 <script type="text/javascript">
     $(function(){
    	 var tent = $('.title-list li');
    	// alert(tent.length);
    	if(tent.length==0)
    		{
    		    $.get("/blog/index.php/Home/Index/tui",function(data){
    		        $(".title-list").empty();
			        var count = data.length;
                    var i = 0;
                    var b="";
                       for(i=0;i<count;i++){
                           b += '<li><a href="/blog/index.php/Home/Index/detail/e/'+data[i].aid+'">'+ data[i].atitle +'</a></li>';
                       }
                    $(".title-list").append(b);
    		    });
    		}
    	
    	 $("#hot").mouseover(function(){
    		 $.ajax({
    			 url: "/blog/index.php/Home/Index/hot",
    			 type: "post",
    			 success: function(data){
    				    $(".title-list").empty();
    			        var count = data.length;
                        var i = 0;
                        var b="";
                           for(i=0;i<count;i++){
                               b += '<li><a href="/blog/index.php/Home/Index/detail/e/'+data[i].aid+'">'+ data[i].atitle +'</a></li>';
                           }
                        $(".title-list").append(b);
    			 }
    		 });
    	 });
    	 
    	 $("#tui").mouseover(function(){
    		 $.ajax({
    			 url: "/blog/index.php/Home/Index/tui",
    			 type: "post",
    			 success: function(data){
    				    $(".title-list").empty();
    			        var count = data.length;
                        var i = 0;
                        var b="";
                           for(i=0;i<count;i++){
                               b += '<li><a href="/blog/index.php/Home/Index/detail/e/'+data[i].aid+'">'+ data[i].atitle +'</a></li>';
                           }
                        $(".title-list").append(b);
    			 }
    		 });
    	 })
    	 
    	 $("#mess-box").submit(function(){
    		 var nickname = $("#nickname");
    		 if(nickname.val()=="")
    			 {
    			      $("#msg").text("请填写昵称!");
    			     nickname.focus();
    			     return false;
    			 }
    		 var ue = UE.getEditor('editor');
  		   
  		   if(ue.hasContents()==false)
  		   {
  		      //alert('ff');
  			   $("#msg").text("请加入文章!");
  			  ue.focus();
  			  return false;
  		   }
  		  return true;
    	 })
    	 
     });
 
 </script>
  
</body>
</html>