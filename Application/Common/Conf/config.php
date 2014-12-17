<?php
return array(
	'DEFAULT_MODULE'     => 'Index', //默认模块
    'URL_MODEL'          => '2', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session


	//数据库配置信息

     //'配置项'=>'配置值'
     'URL_CASE INSENSITIVE' =>true,
     "DB_DEPLOY_TYPE"=>1, //是否启用分布式
     'DB_RW_SEPARATE'=>true, //是否启用智能读写分离
     'DB_TYPE' => 'mysql', //数据库类型
     'DB_HOST' => '192.168.1.110,192.168.1.98', //服务器地址
     'DB_NAME' => 'mybbs', //数据库名
     'DB_USER' => 'root,root', //用户名
     'DB_PWD' =>  'root,root', //密码
     'DB_PREFIX' => 'bbs_', //数据库表前缀
     "project_name"=>"bbs",

     'LAYOUT_ON'=>true,
   
);