<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
   <head>
     <title>SunShine个人博客，一个专注于web技术草根的成长之路</title>
     <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
     <link rel="stylesheet" type="text/css" href="/blog/Public/css/style.css"/>
   </head>


 <body> 
     <div id="header">
         <div class="header-top">
         <div class="left">
             <p class="header-title">SunShine个人博客</p>
             <p1>专注于web开发，注重每一个向上攀登的过程</p1>
         </div>
         
         <div class="right">
             <form id="index-search" action="" method="post">
                <input type="text" name="index-key" id="index-key" placeholder="请输入关键字进行搜索" autocomplete="off"/>
                <input type="submit" value="搜索" id="search-btn"/>
             </form>
         </div>
         </div>
     
  <ul id="nav">
  
    <li class="jquery_out">
      <div class="jquery_inner">
        <div class="jquery"><a href="/blog/index.php/Home/Message/index">首页</a></div>
      </div>
    </li>
    <?php if(is_array($parent)): $i = 0; $__LIST__ = $parent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/blog/index.php/Home/Message/articlelist/e/<?php echo ($vo["mid"]); ?>"><?php echo ($vo['mname']); ?></a>
      <ul class="drop">
       <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i; if($vo['mid'] == $li['parentid']): ?><li><a href="/blog/index.php/Home/Message/GetAll/e/<?php echo ($li["mid"]); ?>"><?php echo ($li['mname']); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>  
      </ul>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
   <li><a href="/blog/index.php/Home/Message/index">留言板</a>
  </ul>
   
  </div>
 
 <div class="container">
    <div class="main_left">
        <div class="mess-list">
        
        
        </div>
    </div>
    
       <div class="main-right">
           <div class="article-sort">
           <div class="content">
               <div class="type"  id=""><a href="">推荐文章</a></div>
               <div class="type" id="hot"><a href="">最新文章</a></div>
               <ul class="title-list">
                  <?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ht): $mod = ($i % 2 );++$i;?><li><a href="/blog/index.php/Home/Message/detail/e/<?php echo ($ht["aid"]); ?>"><?php echo (subtext($ht["atitle"],18)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
               </ul>
            </div>
           </div>
           
            <div class="article-sort" style="margin-top:20px;">
                <div class="content">
                    <div class="theme">最新评论</div>
                </div>
            </div>
        
           <div class="article-sort" style="margin-top:20px;height:295px;margin-bottom:20px;">
            <div class="content">
                 <div class="theme">链接</div>
             </div>
           </div>
           
             
        </div>  
   
 </div>
 
  <div id="footer">
   <p>Powerby SunShine &nbsp;&nbsp;&nbsp 鄂ICP备15002472号-1</p>
    <p>CopyRight©2015 版权所有：SunShine</p>
</div>
 <script type="text/javascript"  src="/blog/Public/Js/jquery.min.js"></script>
 <script type="text/javascript">
     $(function(){
    	 $("#hot").mouseover(function(){
    		 $.ajax({
    			 url: "/blog/index.php/Home/Message/hot",
    			 type: "post",
    			 success: function(data){
    				    $(".title-list").empty();
    			        var count = data.length;
                        var i = 0;
                        var b="";
                           for(i=0;i<count;i++){
                               b+="<li><a href='/blog/index.php/Home/Message/detail/e/"+$data[i].aid+"'>"+data[i].atitle+"</a></li>";
                           }
                        $(".title-list").append(b);
    			 }
    		 });
    	 });
    	 
    	 $("#tui").mouseover(function(){
    		 	 $.ajax({
    			 url: "/blog/index.php/Home/Message/tui",
    			 type: "post",
    			 success: function(data){
    				    $(".title-list").empty();
    			        var count = data.length;
                        var i = 0;
                        var b="";
                           for(i=0;i<count;i++){
                               b+="<li><a href='/blog/index.php/Home/Message/detail/e/"+$data[i].aid+"'>"+data[i].atitle+"</a></li>";
                           }
                        $(".title-list").append(b);
    			 }
    	 })
     });
 
 </script>
</body>
</html>