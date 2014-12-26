<?php
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}
loadcache('plugin');
showtableheader(lang('plugin/nimba_nge','cacheupdate'));
$cachearray=array('cache_nimba_nge_piclist.php','cache_nimba_nge_newthread.php','cache_nimba_nge_newreplies.php','cache_nimba_nge_hotthread_7.php','cache_nimba_nge_hotthread_30.php','cache_nimba_nge_newdigest.php','cache_nimba_nge_userlist.php');
$itemname=array(lang('plugin/nimba_nge','itemname_1'),lang('plugin/nimba_nge','itemname_2'),lang('plugin/nimba_nge','itemname_3'),lang('plugin/nimba_nge','itemname_4'),lang('plugin/nimba_nge','itemname_5'),lang('plugin/nimba_nge','itemname_6'),lang('plugin/nimba_nge','itemname_7'));
require_once DISCUZ_ROOT.'./source/discuz_version.php';
if(DISCUZ_VERSION=='X2') $cachepath=DISCUZ_ROOT.'./data/cache/';
if(DISCUZ_VERSION=='X2.5'||DISCUZ_VERSION=='X3 Beta'||DISCUZ_VERSION=='X3 RC'||DISCUZ_VERSION=='X3') $cachepath=DISCUZ_ROOT.'./data/sysdata/';	
$cache=intval($_G['cache']['plugin']['nimba_nge']['cache']);
$op=addslashes(trim($_GET['op']));
if($op=='update'){
	$item=intval($_GET['item']);
	@unlink($cachepath.$cachearray[$item]);
	@file_get_contents($_G['siteurl'].'forum.php');
	echo '<font color="red">[*]</font>'.$itemname[$item].lang('plugin/nimba_nge','cacheupdated');
}
showsubtitle(array(lang('plugin/nimba_nge','cacheitem'),lang('plugin/nimba_nge','cachetime'),lang('plugin/nimba_nge','nexttime'),lang('plugin/nimba_nge','cacheop')));
foreach($cachearray as $k=>$item){
	if(file_exists($cachepath.$item)){
		@include_once $cachepath.$item;
		showtablerow('', array('class="td_k"', 'class="td_k"', 'class="td_l"'), array(
			$itemname[$k],
			date('Y-m-d H:i:s',$lasttime),
			date('Y-m-d H:i:s',intval($lasttime+$cache)),	
			'<a href="'.ADMINSCRIPT.'?action=plugins&operation=config&do='.$pluginid.'&identifier=nimba_nge&pmod=cache&op=update&item='.$k.'">'.lang('plugin/nimba_nge','cacheupdate').'</a>'
		));	
		
	}else{
		showtablerow('', array('class="td_k"', 'class="td_k"', 'class="td_l"'), array(
			$itemname[$k],
			lang('plugin/nimba_nge','cacheerror'),	
			lang('plugin/nimba_nge','cacheerror'),	
			'<a href="'.ADMINSCRIPT.'?action=plugins&operation=config&do='.$pluginid.'&identifier=nimba_nge&pmod=cache&op=update&item='.$k.'">'.lang('plugin/nimba_nge','cacheupdate').'</a>'
		));		
	}
}
showtablefooter();
?>