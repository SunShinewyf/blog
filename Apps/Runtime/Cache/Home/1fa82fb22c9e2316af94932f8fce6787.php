<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
   <head>
     <title>SunShine个人博客，一个专注于web技术草根的成长之路</title>
     <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
     <link rel="stylesheet" type="text/css" href="/Public/Css/style.css"/>
     <link rel="stylesheet" type="text/css" href="/Public/Css/detail.css"/>
   </head>
   
   <body>
      <div id="article-content">
      <div class="center">
         <div class="article-title"><?php echo ($New[0]['atitle']); ?></div>
        <hr>
         <div class="article-detail">
           <font class="date">作者:<?php echo ($New[0]['aauthor']); ?></font>&nbsp;&nbsp;<font class="skan">浏览次数:<?php echo ($New[0]['atime']); ?></font>&nbsp;&nbsp;<font class="type">分类:<?php echo ($New[0]['Module']['mname']); ?></font>
         </div>
         
         <div class="content-else">
             <p1><?php echo ($New[0]['acontent']); ?></p1>
         </div>
      </div>
        <div class="share">
            <span>将本页分享到：</span>
            <div class="share-detail">
            <span class="bdsharebuttonbox">
            <a href="#" class="bds_more" data-cmd="more"></a>
            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
        </span>
        </div>
        </div>
   </div>
   
 <script>
    window._bd_share_config = {
        "common": {
            "bdSnsKey": {},
            "bdText": "【<?php echo ($PageTitle); ?>】 - 来自:SunShine个人博客！戳链接阅读原文",
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": "",
            "bdStyle": "1",
            "bdSize": "24"
        },
        "share": {}
    };
    with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
</script>
   </body>

</html>