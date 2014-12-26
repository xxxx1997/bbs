<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class plugin_nimba_nge {
	function  __construct() {
	    loadcache('plugin');
		global $_G;
		$this->vars = $_G['cache']['plugin']['nimba_nge'];
		$this->open=$this->vars['open'];
		if($this->open){
			$this->mytitle= explode("/hhf/",str_replace(array("\r\n", "\n", "\r"), '/hhf/',$this->vars['mytitle']));
			$this->forums =unserialize($this->vars['forums']);
			$this->cache=intval($this->vars['cache']);
			$this->hotpicdays=intval($this->vars['hotpicdays']);
			$this->hotpic=explode(",",$this->vars['hotpic']);
			$this->liststyle=intval($this->vars['liststyle']);
			$this->userstyle=intval($this->vars['userstyle']);
			$this->color=trim($this->vars['color']);
			if(!$this->color) $this->color='#008bd3';
			
		}
	}
	function shortlongdata($data){
		if($data>10000) $data=intval($data/10000).lang('plugin/nimba_nge','wan');
		else if($data>1000) $data=intval($data/1000).lang('plugin/nimba_nge','qian');	
		return $data;
	}
	
	function loadcachefile($tag){
		require_once DISCUZ_ROOT.'./source/discuz_version.php';
		if(DISCUZ_VERSION=='X2') $filepath=DISCUZ_ROOT.'./data/cache/cache_nimba_nge_'.$tag.'.php';
		if(DISCUZ_VERSION=='X2.5'||DISCUZ_VERSION=='X3 Beta'||DISCUZ_VERSION=='X3 RC'||DISCUZ_VERSION=='X3') $filepath=DISCUZ_ROOT.'./data/sysdata/cache_nimba_nge_'.$tag.'.php';	
		return $filepath;
	}
	
	function nge_newthread(){
		global $_G;
 		$filepath=$this->loadcachefile('newthread');
		if($filepath&&file_exists($filepath)){
			@include_once $filepath;
		}
		if(time()-intval($lasttime)>$this->cache){//缓存过期 或者 无缓存
			if($this->forums[0]=='') unset($this->forums[0]);
			$notin='';
			if(count($this->forums)){
				$notin=' and fid not in('.implode(',',$this->forums).')';
			}
			/*
			1=标题+作者
			2=标题+发布时间
			3=标题+最后回复时间
			4=标题+浏览数+回复数
			*/				
			$querys=DB::query("SELECT tid,subject,author,authorid,dateline,lastpost,replies,views FROM ".DB::table('forum_thread')." where displayorder>=0 $notin order by dateline DESC LIMIT 0,10");
			$i=1;
			$newthread='';
			while($value=DB::fetch($querys)){
				$class=$i<4? ' class="topRank"':'';
				if($this->liststyle==1) $end='<span><a href="home.php?mod=space&uid='.$value['authorid'].'" target="_blank">'.cutstr($value['author'],8,'').'</span>';
				if($this->liststyle==2) $end='<span>'.date('Y-m-d',$value['dateline']).'</span>';
				if($this->liststyle==3) $end='<span><a href="forum.php?mod=redirect&tid='.$value['tid'].'&goto=lastpost#lastpost" target="_blank">'.date('Y-m-d',$value['lastpost']).'</a></span>';
				if($this->liststyle==4){
					$value['replies']=$this->shortlongdata($value['replies']);
					$value['views']=$this->shortlongdata($value['views']);				
					$end='<span>('.$value['replies'].'/'.$value['views'].')</span>';
				}
				$newthread.='<li'.$class.'>
				<em>'.$i.'</em><a href="forum.php?mod=viewthread&tid='.$value['tid'].'" title="'.$value['subject'].'" target="_blank">'. cutstr($value['subject'],50,'...').'</a>'.$end.'
			</li>';
				$i++;
			}
			$newthread=base64_encode($newthread);			
			if($newthread&&$this->cache){
				@require_once libfile('function/cache');
				$cacheArray .= "\$newthread='".$newthread."';\n\$lasttime=".time().";\n";
				writetocache('nimba_nge_newthread', $cacheArray);				
			}
		}
		return base64_decode($newthread);
	}
	
	function nge_newreplies(){
		global $_G;
		$filepath=$this->loadcachefile('newreplies');
 		if($filepath&&file_exists($filepath)){
			@include_once $filepath;
		}
		if(time()-intval($lasttime)>$this->cache){//缓存过期 或者 无缓存
			if($this->forums[0]=='') unset($this->forums[0]);
			$notin='';
			if(count($this->forums)){
				$notin=' and fid not in('.implode(',',$this->forums).')';
			}
			$dateline=strtotime(date('Y-m-d',time()));
			/*
			1=标题+作者
			2=标题+发布时间
			3=标题+最后回复时间
			4=标题+浏览数+回复数
			*/				
			$querys=DB::query("SELECT tid,subject,author,authorid,dateline,lastpost,replies,views FROM ".DB::table('forum_thread')." where replies>0 and displayorder>=0 $notin order by lastpost DESC LIMIT 0,10");
			$i=1;
			$newreplies='';
			while($value=DB::fetch($querys)){
				$class=$i<4? ' class="topRank"':'';
				if($this->liststyle==1) $end='<span><a href="home.php?mod=space&uid='.$value['authorid'].'" target="_blank">'.cutstr($value['author'],8,'').'</span>';
				if($this->liststyle==2) $end='<span>'.date('Y-m-d',$value['dateline']).'</span>';
				if($this->liststyle==3) $end='<span><a href="forum.php?mod=redirect&tid='.$value['tid'].'&goto=lastpost#lastpost" target="_blank">'.date('Y-m-d',$value['lastpost']).'</a></span>';
				if($this->liststyle==4){
					$value['replies']=$this->shortlongdata($value['replies']);
					$value['views']=$this->shortlongdata($value['views']);				
					$end='<span>('.$value['replies'].'/'.$value['views'].')</span>';
				}
				$newreplies.='<li'.$class.'>
				<em>'.$i.'</em><a href="forum.php?mod=viewthread&tid='.$value['tid'].'" title="'.$value['subject'].'" target="_blank">'. cutstr($value['subject'],50,'...').'</a>'.$end.'
			</li>';
				$i++;
			}
			$newreplies=base64_encode($newreplies);			
			if($newreplies&&$this->cache){
				@require_once libfile('function/cache');
				$cacheArray .= "\$newreplies='".$newreplies."';\n\$lasttime=".time().";\n";
				writetocache('nimba_nge_newreplies', $cacheArray);				
			}
		}
		return base64_decode($newreplies);
	}
	
	function nge_piclist(){
		global $_G;
		$filepath=$this->loadcachefile('piclist');
 		if($filepath&&file_exists($filepath)){
			@include_once $filepath;
		}
		if(time()-intval($lasttime)>$this->cache){//缓存过期 或者 无缓存
			$num=5;
			$piclist='';
			//if($_G['cookie']['widthauto']) $width="100%";
			//else $width="328px";
			$width="100%";
			if($this->hotpic){
				foreach($this->hotpic as $k=>$tid){
					$tid=intval($tid);
					if($tid){
						$query = DB::query("SELECT a.tid,a.subject,b.attachment from ".DB::table('forum_thread')." as a left join ".DB::table('forum_threadimage')." as b on a.tid=b.tid where a.tid=$tid and a.attachment>0 and a.displayorder>=0 and b.attachment!='' order by a.views DESC LIMIT 0,1");
						$pic=DB::fetch($query);
						if($pic){
							$piclist.='<li style="width:'.$width.';height:279px;display: block;"><a href="forum.php?mod=viewthread&tid='.$pic['tid'].'" target="_blank"><img src="data/attachment/forum/'.$pic['attachment'].'" width="'.$width.'" height="279px"></a><span class="title">'.$pic['subject'].'</span></li>';
							$num-=1;
						}
					}
				}	
			}
			if($num>0){
				$dateline=time()-86400*$this->hotpicdays;
				if($this->forums[0]=='') unset($this->forums[0]);
				$notin='';
				if(count($this->forums)){
					$notin=' and a.fid not in('.implode(',',$this->forums).')';
				}			
				$query = DB::query("SELECT a.tid,a.subject,b.attachment from ".DB::table('forum_thread')." as a left join ".DB::table('forum_threadimage')." as b on a.tid=b.tid where a.attachment>0 and a.displayorder>=0 and b.attachment!='' and a.dateline>".$dateline." $notin order by a.views DESC LIMIT 0,$num");
				while($pic=DB::fetch($query)){
					if($pic){
						$piclist.='<li style="width:'.$width.';height:279px;display: block;"><a href="forum.php?mod=viewthread&tid='.$pic['tid'].'" target="_blank"><img src="data/attachment/forum/'.$pic['attachment'].'" width="'.$width.'" height="279px"></a><span class="title">'.$pic['subject'].'</span></li>';
					}
				}
			}
			$piclist=base64_encode($piclist);
			if($piclist&&$this->cache){
				@require_once libfile('function/cache');
				$cacheArray .= "\$piclist='".$piclist."';\n\$lasttime=".time().";\n";
				writetocache('nimba_nge_piclist', $cacheArray);				
			}		
		}
		return base64_decode($piclist);
	}
	
	function nge_hotthread_by_days($days){
		global $_G;
		$filepath=$this->loadcachefile('hotthread_'.$days);
 		if($filepath&&file_exists($filepath)){
			@include_once $filepath;
		}
		if(time()-intval($lasttime)>$this->cache){//缓存过期 或者 无缓存
			if($this->forums[0]=='') unset($this->forums[0]);
			$notin='';
			if(count($this->forums)){
				$notin=' and fid not in('.implode(',',$this->forums).')';
			}
			$dateline=time()-$days*86400;
			/*
			1=标题+作者
			2=标题+发布时间
			3=标题+最后回复时间
			4=标题+浏览数+回复数
			*/				
			$querys=DB::query("SELECT tid,subject,author,authorid,dateline,lastpost,replies,views FROM ".DB::table('forum_thread')." where displayorder>=0 and dateline>".$dateline." $notin order by views DESC LIMIT 0,10");
			$i=1;
			$hotthread='';
			while($value=DB::fetch($querys)){
				$class=$i<4? ' class="topRank"':'';
				if($this->liststyle==1) $end='<span><a href="home.php?mod=space&uid='.$value['authorid'].'" target="_blank">'.cutstr($value['author'],8,'').'</span>';
				if($this->liststyle==2) $end='<span>'.date('Y-m-d',$value['dateline']).'</span>';
				if($this->liststyle==3) $end='<span><a href="forum.php?mod=redirect&tid='.$value['tid'].'&goto=lastpost#lastpost" target="_blank">'.date('Y-m-d',$value['lastpost']).'</a></span>';
				if($this->liststyle==4){
					$value['replies']=$this->shortlongdata($value['replies']);
					$value['views']=$this->shortlongdata($value['views']);				
					$end='<span>('.$value['replies'].'/'.$value['views'].')</span>';
				}
				$hotthread.='<li'.$class.'>
				<em>'.$i.'</em><a href="forum.php?mod=viewthread&tid='.$value['tid'].'" title="'.$value['subject'].'" target="_blank">'. cutstr($value['subject'],50,'...').'</a>'.$end.'
			</li>';
				$i++;
			}
			$hotthread=base64_encode($hotthread);			
			if($hotthread&&$this->cache){
				@require_once libfile('function/cache');
				$cacheArray .= "\$hotthread='".$hotthread."';\n\$lasttime=".time().";\n";
				writetocache('nimba_nge_hotthread_'.$days, $cacheArray);				
			}
		}
		return base64_decode($hotthread);
	}
	
	function nge_newdigest(){
		global $_G;
		$filepath=$this->loadcachefile('newdigest');
 		if($filepath&&file_exists($filepath)){
			@include_once $filepath;
		}
		if(time()-intval($lasttime)>$this->cache){//缓存过期 或者 无缓存
			if($this->forums[0]=='') unset($this->forums[0]);
			$notin='';
			if(count($this->forums)){
				$notin=' and fid not in('.implode(',',$this->forums).')';
			}
			$dateline=strtotime(date('Y-m-d',time()));
			/*
			1=标题+作者
			2=标题+发布时间
			3=标题+最后回复时间
			4=标题+浏览数+回复数
			*/				
			$querys=DB::query("SELECT tid,subject,author,authorid,dateline,lastpost,replies,views FROM ".DB::table('forum_thread')." where digest!=0 and displayorder>=0 $notin order by dateline DESC LIMIT 0,10");
			$i=1;
			$newdigest='';
			while($value=DB::fetch($querys)){
				$class=$i<4? ' class="topRank"':'';
				if($this->liststyle==1) $end='<span><a href="home.php?mod=space&uid='.$value['authorid'].'" target="_blank">'.cutstr($value['author'],8,'').'</span>';
				if($this->liststyle==2) $end='<span>'.date('Y-m-d',$value['dateline']).'</span>';
				if($this->liststyle==3) $end='<span><a href="forum.php?mod=redirect&tid='.$value['tid'].'&goto=lastpost#lastpost" target="_blank">'.date('Y-m-d',$value['lastpost']).'</a></span>';
				if($this->liststyle==4){
					$value['replies']=$this->shortlongdata($value['replies']);
					$value['views']=$this->shortlongdata($value['views']);				
					$end='<span>('.$value['replies'].'/'.$value['views'].')</span>';
				}
				$newdigest.='<li'.$class.'>
				<em>'.$i.'</em><a href="forum.php?mod=viewthread&tid='.$value['tid'].'" title="'.$value['subject'].'" target="_blank">'. cutstr($value['subject'],50,'...').'</a>'.$end.'
			</li>';
				$i++;
			}
			$newdigest=base64_encode($newdigest);			
			if($newdigest&&$this->cache){
				@require_once libfile('function/cache');
				$cacheArray .= "\$newdigest='".$newdigest."';\n\$lasttime=".time().";\n";
				writetocache('nimba_nge_newdigest', $cacheArray);				
			}
		}
		return base64_decode($newdigest);
	}
	
	function nge_userlist(){
		global $_G;
		$filepath=$this->loadcachefile('userlist');
 		if($filepath&&file_exists($filepath)){
			@include_once $filepath;
		}
		if(time()-intval($lasttime)>$this->cache){//缓存过期 或者 无缓存
			/*
			1=今日主题排行
			2=今日发帖排行(主题+回复)
			3=本周主题排行
			4=本周发帖排行(主题+回复)
			5=本月主题排行
			6=本月发帖排行(主题+回复)			
			*/
			if($this->userstyle==1||$this->userstyle==3||$this->userstyle==5){
				if($this->userstyle==1) $dateline=strtotime(date('Y-m-d',time()));
				if($this->userstyle==3) $dateline=time()-604800;
				if($this->userstyle==5) $dateline=time()-2592000;
				$querys = DB::query("SELECT distinct authorid as uid,author as username FROM ".DB::table('forum_thread')." where displayorder>=0 and dateline>$dateline order by dateline DESC");
				$count=array();
				$rdata=array();
				while($user = DB::fetch($querys)){
					if($user['uid']){
						$user['count']=DB::result_first("SELECT count(*) FROM ".DB::table('forum_thread')." where displayorder>=0 and dateline>$dateline and authorid=".$user['uid']);
						$count[]=$user['count'];
						$rdata[]=$user;
					}
				}
				arsort($count);
				$userlist='';
				$i=1;
				foreach($count as $k=>$v){
					$class=$i<4? ' class="topRank"':'';
					$userlist.='<li'.$class.'><em>'.$i.'</em><img class="vm" src="'.$_G['setting']['ucenterurl'].'/avatar.php?uid='.$rdata[$k]['uid'].'&size=small" width="16" height="16" alt="'.$rdata[$k]['username'].'"> <a href="home.php?mod=space&uid='.$rdata[$k]['uid'].'" title="'.$rdata[$k]['username'].'" c="1" target="_blank">'.$rdata[$k]['username'].'</a><span>'.$v.'</span></li>';
					$i++;
					if($i>10) break;
				}
			}
			if($this->userstyle==2||$this->userstyle==4||$this->userstyle==6){
				if($this->userstyle==2) $dateline=strtotime(date('Y-m-d',time()));
				if($this->userstyle==4) $dateline=time()-604800;
				if($this->userstyle==6) $dateline=time()-2592000;
				$querys = DB::query("SELECT distinct authorid as uid,author as username FROM ".DB::table('forum_post')." where invisible=0 and dateline>$dateline order by dateline DESC");
				$count=array();
				$rdata=array();
				while($user = DB::fetch($querys)){
					if($user['uid']){
						$user['count']=DB::result_first("SELECT count(*) FROM ".DB::table('forum_post')." where invisible=0 and dateline>$dateline and authorid=".$user['uid']);
						$count[]=$user['count'];
						$rdata[]=$user;
					}
				}
				arsort($count);
				$userlist='';
				$i=1;
				foreach($count as $k=>$v){
					if($i<4) $class=' class="topRank"';
					else $class='';
					$userlist.='<li'.$class.'><em>'.$i.'</em><img class="vm" src="'.$_G['setting']['ucenterurl'].'/avatar.php?uid='.$rdata[$k]['uid'].'&size=small" width="16" height="16" alt="'.$rdata[$k]['username'].'"> <a href="home.php?mod=space&uid='.$rdata[$k]['uid'].'" title="'.$rdata[$k]['username'].'" c="1" target="_blank">'.$rdata[$k]['username'].'</a><span>'.$v.'</span></li>';
					$i++;
					if($i>10) break;
				}
			}		
			$userlist=base64_encode($userlist);			
			if($userlist&&$this->cache){
				@require_once libfile('function/cache');
				$cacheArray .= "\$userlist='".$userlist."';\n\$lasttime=".time().";\n";
				writetocache('nimba_nge_userlist', $cacheArray);				
			}			
		}
		return base64_decode($userlist);
	}
}
class plugin_nimba_nge_forum extends plugin_nimba_nge{
	function index_top() {
		global $_G;
		$newthread=$this->nge_newthread();
		$newreplies=$this->nge_newreplies();
		$piclist=$this->nge_piclist();
		$hotthread7=$this->nge_hotthread_by_days(7);
		$hotthread30=$this->nge_hotthread_by_days(30);
		$newdigest=$this->nge_newdigest();
		$userlist=$this->nge_userlist();
		$itemname=array('',lang('plugin/nimba_nge','itemname_1'),lang('plugin/nimba_nge','itemname_2'),lang('plugin/nimba_nge','itemname_3'),lang('plugin/nimba_nge','itemname_4'),lang('plugin/nimba_nge','itemname_5'),lang('plugin/nimba_nge','itemname_6'),lang('plugin/nimba_nge','itemname_7'));
		foreach($this->mytitle as $k=>$item){
 			$name=explode('=',$item);
			$name[0]=intval($name[0]);
			$name[1]=trim($name[1]);
			if($name[0]&&$name[1]) $itemname[$name[0]]=$name[1];
		}
		include template('nimba_nge:nge');
		return $return;
	}
}

?>