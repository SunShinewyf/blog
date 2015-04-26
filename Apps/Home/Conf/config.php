<?php
return array(
    //'配置项'=>'配置值'
        '__ROOT__' => '/blog',
        'URL_MODEL'          => '2', //URL模式
		'__UPLOADS__' => '/blog/Uploads',
		'SHOW_PAGE_TRACE'=>true,//开启页面Trace
        '__PUBLIC__' => '/blog/Public',
        'DB_DSN' => 'mysql://root:@localhost:3306/blog#utf8',
        'DB_PREFIX' => 'bl_',
);
?>