<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
/*
 * �����޸ı�ҳ�κ����ݣ��������Ը���
 * ���� ���������� �˹�����ʵ���� ��Ʒ��Made By Nimba, Team From AiLab.cn)
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