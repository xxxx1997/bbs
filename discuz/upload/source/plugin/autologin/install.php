<?php
/*
 * 主页：http://addon.discuz.com/?@ailab
 * 人工智能实验室：Discuz!应用中心十大优秀开发者！
 * 插件定制 联系QQ594941227
 * From www.ailab.cn
 */
 
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<<EOF
CREATE TABLE IF NOT EXISTS `pre_autologin` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `logindata` varchar(255) NOT NULL DEFAULT '',  
  `dateline` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;
CREATE TABLE IF NOT EXISTS `pre_autologin_log` (
  `logid` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `ip` char(15) NOT NULL DEFAULT '',
  `dateline` int(11) NOT NULL,
  PRIMARY KEY  (`logid`)
) ENGINE=MyISAM;
EOF;

runquery($sql);

$finish = true;

?>