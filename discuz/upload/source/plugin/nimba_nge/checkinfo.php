<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
/*
 * 请勿修改本页任何内容，否则后果自负！
 * 作者 土著人宁巴 人工智能实验室 出品（Made By Nimba, Team From AiLab.cn)
 */
$info=array();
$info['name']='nimba_nge';
$info['version']='v1.5.1';
require_once DISCUZ_ROOT.'./source/discuz_version.php';
$info['siteversion']=DISCUZ_VERSION;
$info['siterelease']=DISCUZ_RELEASE;
$info['timestamp']=TIMESTAMP;
$info['nowurl']=$_G['siteurl'];
$info['siteurl']='http://www.discuz.com/upload/';
$info['clienturl']='http://www.discuz.com/upload/';
$info['siteid']='A8DB051A-B559-1CD1-615D-822F16E90F81';
$info['sn']='20141224144f9RF190fF';
$info['adminemail']=$_G['setting']['adminemail'];
$infobase=base64_encode(serialize($info));
?>