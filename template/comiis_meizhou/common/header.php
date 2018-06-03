<?php echo '源码网 www.adminbuy.cn';exit;?>
<!--{subtemplate common/header_common}-->
<!--{eval require_once("./template/comiis_meizhou/comiis_config.php");}-->
	<meta name="application-name" content="$_G['setting']['bbname']" />
	<meta name="msapplication-tooltip" content="$_G['setting']['bbname']" />
	<!--{if $_G['setting']['portalstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][1]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G[siteurl].'portal.php'};icon-uri={$_G[siteurl]}{IMGDIR}/portal.ico" /><!--{/if}-->
	<meta name="msapplication-task" content="name=$_G['setting']['navs'][2]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G[siteurl].'forum.php'};icon-uri={$_G[siteurl]}{IMGDIR}/bbs.ico" />
	<!--{if $_G['setting']['groupstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][3]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G[siteurl].'group.php'};icon-uri={$_G[siteurl]}{IMGDIR}/group.ico" /><!--{/if}-->
	<!--{if helper_access::check_module('feed')}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][4]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G[siteurl].'home.php'};icon-uri={$_G[siteurl]}{IMGDIR}/home.ico" /><!--{/if}-->
	<!--{if $_G['basescript'] == 'forum' && $_G['setting']['archiver']}-->
		<link rel="archives" title="$_G['setting']['bbname']" href="{$_G[siteurl]}archiver/" />
	<!--{/if}-->
	<!--{if !empty($rsshead)}-->$rsshead<!--{/if}-->
	<!--{if widthauto()}-->
		<link rel="stylesheet" id="css_widthauto" type="text/css" href='{$_G['setting']['csspath']}{STYLEID}_widthauto.css?{VERHASH}' />
		<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
	<!--{/if}-->
	<!--{if $_G['basescript'] == 'forum' || $_G['basescript'] == 'group'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}forum.js?{VERHASH}"></script>
	<!--{elseif $_G['basescript'] == 'home' || $_G['basescript'] == 'userapp'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}home.js?{VERHASH}"></script>
	<!--{elseif $_G['basescript'] == 'portal'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>
	<!--{/if}-->
	<!--{if $_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>
	<!--{/if}-->
	<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
		<link rel="stylesheet" type="text/css" id="diy_common" href="{$_G['setting']['csspath']}{STYLEID}_css_diy.css?{VERHASH}" />
	<!--{/if}-->
<!--{if !$_G['uid']}--><style>.fwin .m_c {background:#fff url({$_G['style']['styleimgdir']}/comiis_loginbg.gif) no-repeat right bottom;}</style><!--{/if}-->
<!--{eval $comiis_ff=1;}-->
<!--{if $comiis_window_width==2}-->
<script>
if(screen.width>1210){
	HTMLNODE.className += ' comiis_wide';
}
</script>
<!--{/if}-->
</head>
<body id="nv_{$_G[basescript]}" class="pg_{CURMODULE}{if $_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)} {$cat['bodycss']}{/if}<!--{if $comiis_window_width==1}--> comiis_wide<!--{/if}--> viab" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
	<!--{template common/header_diy}-->
<!--{/if}-->
<!--{if check_diy_perm($topic)}-->
	<!--{template common/header_diynav}-->
<!--{/if}-->
<!--{if CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)}-->
	$diynav
<!--{/if}-->
<!--{if empty($topic) || $topic['useheader']}-->
	<!--{if $_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')}-->
		<div class="xi1 bm bm_c">
			{lang your_mobile_browser}<a href="{$_G['siteurl']}forum.php?mobile=yes">{lang go_to_mobile}</a> <span class="xg1">|</span> <a href="$_G['setting']['mobile']['nomobileurl']">{lang to_be_continue}</a>
		</div>
	<!--{/if}-->
	<!--{if $_G['setting']['shortcut'] && $_G['member'][credits] >= $_G['setting']['shortcut']}-->
		<div id="shortcut">
			<span><a href="javascript:;" id="shortcutcloseid" title="{lang close}">{lang close}</a></span>
			{lang shortcut_notice}
			<a href="javascript:;" id="shortcuttip">{lang shortcut_add}</a>
		</div>
		<script type="text/javascript">setTimeout(setShortcut, 2000);</script>
	<!--{/if}-->
	<!--{if $comiis_header==1 || $comiis_header==2 || $comiis_header==3}-->
	<div id="toptb" class="cl comiis_toptb<!--{if ($comiis_header==1 && $_G['basescript']=='portal') || $comiis_header==3}--> comiis_toptbmh<!--{/if}-->">
		<!--{hook/global_cpnav_top}-->
		<div class="wp">			
			<div class="z">
				<!--{loop $_G['setting']['topnavs'][0] $nav}-->
					<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->$nav[code]<!--{/if}-->
				<!--{/loop}-->
				<!--{hook/global_cpnav_extra1}-->
				<!--{hook/global_cpnav_extra2}-->
				<!--{loop $_G['setting']['topnavs'][1] $nav}-->
					<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->$nav[code]<!--{/if}-->
				<!--{/loop}-->
				<!--{if empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']}-->
					<a href="javascript:;" id="switchwidth" onclick="widthauto(this)" title="{if widthauto()}{lang switch_narrow}{else}{lang switch_wide}{/if}" class="switchwidth"><!--{if widthauto()}-->{lang switch_narrow}<!--{else}-->{lang switch_wide}<!--{/if}--></a>
				<!--{/if}-->
				<!--{if $_G['uid'] && !empty($_G['style']['extstyle'])}--><a id="sslct" href="javascript:;" onmouseover="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">{lang changestyle}</a><!--{/if}-->
				<!--{if check_diy_perm($topic)}-->
					$diynav
				<!--{/if}-->
				<a id="switchblind" href="javascript:;" onclick="toggleBlind(this)" title="{lang switch_blind}" class="switchblind">{lang switch_blind}</a>
			</div>
			<div class="y kmy">
				<!--{subtemplate common/comiis_user}-->
			</div>
		</div>
	</div>	
	<!--{else}-->
	<div id="toptb" class="cl comiis_toptbmh">
		<!--{hook/global_cpnav_top}-->
		<div class="wp">
			<div class="z">
				<!--{loop $_G['setting']['topnavs'][0] $nav}-->
					<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->$nav[code]<!--{/if}-->
				<!--{/loop}-->
				<!--{hook/global_cpnav_extra1}-->
			</div>
			<div class="y">
				<a id="switchblind" href="javascript:;" onclick="toggleBlind(this)" title="{lang switch_blind}" class="switchblind">{lang switch_blind}</a>
				<!--{hook/global_cpnav_extra2}-->
				<!--{loop $_G['setting']['topnavs'][1] $nav}-->
					<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->$nav[code]<!--{/if}-->
				<!--{/loop}-->
				<!--{if empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']}-->
					<a href="javascript:;" id="switchwidth" onclick="widthauto(this)" title="{if widthauto()}{lang switch_narrow}{else}{lang switch_wide}{/if}" class="switchwidth"><!--{if widthauto()}-->{lang switch_narrow}<!--{else}-->{lang switch_wide}<!--{/if}--></a>
				<!--{/if}-->
				<!--{if $_G['uid'] && !empty($_G['style']['extstyle'])}--><a id="sslct" href="javascript:;" onmouseover="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">{lang changestyle}</a><!--{/if}-->
				<!--{if check_diy_perm($topic)}-->
					$diynav
				<!--{/if}-->
			</div>
		</div>
	</div>
	<!--{/if}-->
	<!--{if !IS_ROBOT}-->
		<!--{if $_G['uid']}-->
		<ul id="myprompt_menu" class="p_pop" style="display: none;">
			<li><a href="home.php?mod=space&do=pm" id="pm_ntc" style="background-repeat: no-repeat;background-position: 0 50%;"><em class="prompt_news{if empty($_G[member][newpm])}_0{/if}"></em>{lang pm_center}</a></li>
				<li><a href="home.php?mod=follow&do=follower"><em class="prompt_follower{if empty($_G[member][newprompt_num][follower])}_0{/if}"></em><!--{lang notice_interactive_follower}-->{if $_G[member][newprompt_num][follower]}($_G[member][newprompt_num][follower]){/if}</a></li>
			<!--{if $_G[member][newprompt] && $_G[member][newprompt_num][follow]}-->
				<li><a href="home.php?mod=follow"><em class="prompt_concern"></em><!--{lang notice_interactive_follow}-->($_G[member][newprompt_num][follow])</a></li>
			<!--{/if}-->
			<!--{if $_G[member][newprompt]}-->
				<!--{loop $_G['member']['category_num'] $key $val}-->
					<li><a href="home.php?mod=space&do=notice&view=$key"><em class="notice_$key"></em><!--{echo lang('template', 'notice_'.$key)}-->(<span class="rq">$val</span>)</a></li>
				<!--{/loop}-->
			<!--{/if}-->
			<!--{if empty($_G['cookie']['ignore_notice'])}-->
			<li class="ignore_noticeli"><a href="javascript:;" onclick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="{lang temporarily_to_remind}"><em class="ignore_notice"></em></a></li>
			<!--{/if}-->
			</ul>
		<!--{/if}-->
		<!--{if $_G['uid'] && !empty($_G['style']['extstyle'])}-->
			<div id="sslct_menu" class="cl p_pop" style="display: none;">
				<!--{if !$_G[style][defaultextstyle]}--><span class="sslct_btn" onclick="extstyle('')" title="{lang default}"><i></i></span><!--{/if}-->
				<!--{loop $_G['style']['extstyle'] $extstyle}-->
					<span class="sslct_btn" onclick="extstyle('$extstyle[0]')" title="$extstyle[1]"><i style='background:$extstyle[2]'></i></span>
				<!--{/loop}-->
			</div>
			<!--{/if}-->
			<!--{if $_G['uid']}-->
				<ul id="myitem_menu" class="p_pop" style="display: none;">
					<li><a href="forum.php?mod=guide&view=my">帖子</a></li>
					<li><a href="home.php?mod=space&do=favorite&view=me">{lang favorite}</a></li>
					<li><a href="home.php?mod=space&do=friend">{lang friends}</a></li>
					<!--{hook/global_myitem_extra}-->
				</ul>
			<!--{/if}-->
			<!--{subtemplate common/header_qmenu}-->
	<!--{/if}-->
	<!--{ad/headerbanner/wp a_h}-->
	<div id="hd">
		<div class="wp">
			<div class="hdc cl">
				<!--{eval $mnid = getcurrentnav();}-->
				<h2><!--{if !isset($_G['setting']['navlogos'][$mnid])}--><a href="{if $_G['setting']['domain']['app']['default']}http://{$_G['setting']['domain']['app']['default']}/{else}./{/if}" title="$_G['setting']['bbname']">{$_G['style']['boardlogo']}</a><!--{else}-->$_G['setting']['navlogos'][$mnid]<!--{/if}--></h2>
				<!--{if $comiis_header==1 || $comiis_header==2 || $comiis_header==3}-->
				<!--{if $comiis_tianqi==1 && $comiis_window_width!=0 }-->
				<!--------天气代码-------->
				<div id="comiis_kmtq" class="comiis_tianqi"><iframe name="weather_inc" src="http://i.tianqi.com/index.php?c=code&id=84" width="130" height="80" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="true"></iframe><a href="http://weather.news.qq.com/" target=_blank class="gotianqi"></a></div>				
				<!------天气代码END------>
				<script>if(screen.width>1210){$('comiis_kmtq').className += ' showtq';}</script>
				<!--{/if}-->
				<!--{if $comiis_logo_ad==1}-->
				<!------- 头部广告代码 -------->
					<div class="comiis_bananer">
						<a href="javascript:;"><img src="template/comiis_meizhou/ads/topad.jpg"></a>		
					</div>
				<!------- 头部广告代码End -------->
				<!--{/if}-->		
				<div id="sckm" class="y cl">
					<!--{subtemplate common/comiis_navss}-->
				</div>
				<div id="scbar_hot" class="y">
					<!--{if $_G['setting']['srchhotkeywords']}-->
						<strong class="xw1">{lang hot_search}: </strong>
						<!--{loop $_G['setting']['srchhotkeywords'] $val}-->
							<!--{if $val=trim($val)}-->
								<!--{eval $valenc=rawurlencode($val);}-->
								<!--{block srchhotkeywords[]}-->
									<!--{if !empty($searchparams[url])}-->
										<a href="$searchparams[url]?q=$valenc&source=hotsearch{$srchotquery}" target="_blank" class="xi2" sc="1">$val</a>
									<!--{else}-->
										<a href="search.php?mod=forum&srchtxt=$valenc&formhash={FORMHASH}&searchsubmit=true&source=hotsearch" target="_blank" class="xi2" sc="1">$val</a>
									<!--{/if}-->
								<!--{/block}-->
							<!--{/if}-->
						<!--{/loop}-->
						<!--{echo implode('', $srchhotkeywords);}-->
					<!--{/if}-->
				</div>
				<!--{else}-->
				<!--{template common/header_userstatus}-->
				<!--{/if}-->
			</div>
			<div class="kxlb" style="clear:both;"></div>
		</div>
		<!--{if !($comiis_header==1 && $_G['basescript']=='portal') && $comiis_header!=3}-->
		<div class="comiis_nvdiv">
			<div id="comiis_nv">
				<div class="wp comiis_nvbox cl">
					<!--{if $comiis_qmenu==1}--><a href="javascript:;" id="qmenu" onmouseover="delayShow(this, function () {showMenu({'ctrlid':'qmenu','pos':'34!','ctrlclass':'a','duration':2});showForummenu($_G[fid]);})">{lang my_nav}</a><!--{/if}-->
					<ul>
						<!--{loop $_G['setting']['navs'] $nav}-->
							<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}--><li {if $mnid == $nav[navid]}class="a" {/if}$nav[nav]></li><!--{/if}-->
						<!--{/loop}-->
					</ul>
					<!--{hook/global_nav_extra}-->
				</div>
			</div>
		</div>
		<!--{/if}-->
		<div class="wp">
			<!--{if !empty($_G['setting']['plugins']['jsmenu'])}-->
				<ul class="p_pop h_pop" id="plugin_menu" style="display: none">
				<!--{loop $_G['setting']['plugins']['jsmenu'] $module}-->
					 <!--{if !$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])}-->
					 <li>$module[url]</li>
					 <!--{/if}-->
				<!--{/loop}-->
				</ul>
			<!--{/if}-->
			$_G[setting][menunavs]
			<div id="mu" class="cl">
			<!--{if $_G['setting']['subnavs']}-->
				<!--{loop $_G[setting][subnavs] $navid $subnav}-->
					<!--{if $_G['setting']['navsubhover'] || $mnid == $navid}-->
					<ul class="cl {if $mnid == $navid}current{/if}" id="snav_$navid" style="display:{if $mnid != $navid}none{/if}">
					$subnav
					</ul>
					<!--{/if}-->
				<!--{/loop}-->
			<!--{/if}-->
			</div>
			<!--{if $comiis_nav==1}-->
			<div class="comiis_xnav<!--{if ($comiis_header==1 && $_G['basescript']=='portal') || $comiis_header==3}--> comiis_xnavmh<!--{/if}-->">
				<div class="n1_cs n0">
					<dl>
						<dt><a href="http://www.adminbuy.cn" target="_blank">资讯</a></dt>
						<dd>
							<ul>
								<li><a href="/portal.php?mod=list&catid=10" target="_blank">国内</a></li>
								<li><a href="/portal.php?mod=list&catid=11" target="_blank">国际</a></li>
								<li><a href="/portal.php?mod=list&catid=12" target="_blank">市场<span></span></a></li>
								<li><a href="/portal.php?mod=list&catid=13" target="_blank">业界</a></li>
			
								<li><a href="/portal.php?mod=list&catid=14" target="_blank">养殖</a></li>
								<li><a href="/portal.php?mod=list&catid=15" target="_blank">种苗</a></li>
								<li><a href="/portal.php?mod=list&catid=16" target="_blank">药品</a></li>
								<li><a href="/portal.php?mod=list&catid=17" target="_blank">设备</a></li>
							</ul>
						</dd>
					</dl>
				</div>
				<div class="n2_sq n0">
					<dl>
						<dt><a href="http://www.adminbuy.cn" target="_blank">饲料</a></dt>
						<dd>
							<ul>
								<li><a href="/portal.php?mod=list&catid=31" target="_blank">鱼粉</a></li>
								<li><a href="/portal.php?mod=list&catid=32" target="_blank">豆粕</a></li>
								<li><a href="/portal.php?mod=list&catid=33" target="_blank">油脂</a></li>
								<li><a href="/portal.php?mod=list&catid=34" target="_blank">大豆</a></li>
								<li><a href="/portal.php?mod=list&catid=35" target="_blank">玉米<span></span></a></li>
								<li><a href="/portal.php?mod=list&catid=36" target="_blank">棉粕</a></li>
								<li><a href="/portal.php?mod=list&catid=30" target="_blank">原料</a></li>
								<li><a href="/portal.php?mod=list&catid=29" target="_blank">加工</a></li>
								<li><a href="/portal.php?mod=list&catid=28" target="_blank">知识</a></li>
								<li><a href="/portal.php?mod=list&catid=19" target="_blank">出口</a></li>
							</ul>
						</dd>
					</dl>
				</div>
				<div class="n3_xf n0">
					<dl>
						<dt><a href="http://www.adminbuy.cn" target="_blank">养虾</a></dt>
						<dd>
							<ul>
								<li><a href="/portal.php?mod=list&catid=55" target="_blank">对虾养殖</a></li>
								<li><a href="/portal.php?mod=list&catid=54" target="_blank">龙虾养殖<span></span></a></li>
								<li><a href="/portal.php?mod=list&catid=56" target="_blank">青虾养殖</a></li>
								<li><a href="/portal.php?mod=list&catid=58" target="_blank">基围虾类</a></li>
							</ul>
						</dd>
					</dl>
				</div>
				<div class="n4_fl n0">
					<dl>
						<dt><a href="http://www.adminbuy.cn" target="_blank">养殖</a></dt>
						<dd>
							<ul>
					            <li><a href="/portal.php?mod=list&catid=70" target="_blank">淡水养殖</a></li>
								<li><a href="/portal.php?mod=list&catid=71" target="_blank">黄鳝养殖</a></li>
								<li><a href="/portal.php?mod=list&catid=72" target="_blank">泥鳅养殖<span></span></a></a></li>
								<li><a href="/portal.php?mod=list&catid=73" target="_blank">鳗鱼养殖</a></li>
								<li><a href="/portal.php?mod=list&catid=74" target="_blank">鳜鱼养殖</a></li>
								<li><a href="/portal.php?mod=list&catid=75" target="_blank">黑鱼养殖</a></li>
							</ul>
						</dd>
					</dl>
				</div>
			</div>
			<!--{/if}-->
			<!--{ad/subnavbanner/a_mu}-->
			<!--{if $comiis_header==0}-->
			<!--{subtemplate common/pubsearchform}-->
			<!--{/if}-->
		</div>
	</div>
	<!--{if $comiis_header==1 || $comiis_header==2 || $comiis_header==3}-->
	<!--{if $_G['setting']['search'] && $slist}-->
		<ul id="comiis_twtsc_type_menu" class="p_pop" style="display: none;"><!--{echo implode('', $slist);}--></ul>
		<script type="text/javascript">
			initSearchmenu('comiis_twtsc', '$searchparams[url]');
		</script>
	<!--{/if}-->
	<!--{if $_G['uid']}-->
		<ul id="myuser_menu" class="p_pop" style="display: none;">
			<li><a href="home.php?mod=spacecp&ac=credit&showcredit=1" style="color:#db0000">{lang credits}: $_G[member][credits]</a></li>
			<li><a href="home.php?mod=spacecp&ac=usergroup" style="color:#db0000">{lang usergroup}: $_G[group][grouptitle]</a></li>
			<li><a href="forum.php?mod=guide&view=my">我的帖子</a></li>
			<li><a href="home.php?mod=space&do=favorite&view=me">我的{lang favorite}</a></li>
			<li><a href="home.php?mod=space&do=friend">我的{lang friends}</a></li>				
			<!--{hook/global_myitem_extra}-->
		</ul>
		<ul id="myshezhi_menu" class="p_pop" style="display: none;">
			<li><a href="home.php?mod=spacecp&ac=avatar">修改头像</a></li>
			<li><a href="home.php?mod=spacecp&ac=profile">修改资料</a></li>
			<li><a href="home.php?mod=spacecp&ac=privacy">隐私设置</a></li>
			<li><a href="home.php?mod=spacecp&ac=profile&op=password">密码安全</a></li>
		</ul>
		<ul id="myguanli_menu" class="p_pop" style="display: none;">
			<!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->
				<li><a href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a></li>
			<!--{/if}-->
			<!--{if $_G['uid'] && $_G['group']['radminid'] > 1}-->
				<li><a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a></li>
			<!--{/if}-->
			<!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->
				<li><a href="admin.php" target="_blank">{lang admincp}</a></li>
			<!--{/if}-->
		</ul>
	<!--{/if}-->
	<!--{/if}-->
	<!--{hook/global_header}-->
<!--{/if}-->
<!--{if $comiis_nv==1}-->
	<!--{if !($comiis_header==1 && $_G['basescript']=='portal') && $comiis_header!=3}-->
	<script src="{$_G['style']['styleimgdir']}/comiis_nv.js" type="text/javascript"></script>
	<!--{/if}-->
<!--{/if}-->
<div id="wp" class="wp">