<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('list_2');
block_get('1565,1864,1862,1557,1558,1559,1560,1561,1562,1563,1564,1863');?>
﻿<?php include template('common/header'); $list = array();?><?php $wheresql = category_get_wheresql($cat);?><?php $list = category_get_list($cat, $wheresql, $page);?><?php if($comiis_wz_nv==1) { ?>
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="<?php echo $_G['setting']['navs']['1']['filename'];?>"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em><?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?> <a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a><em>&rsaquo;</em><?php } ?>
<?php echo $cat['catname'];?>
</div>
</div>
<?php } ?><?php echo adshow("text/wp a_t");?><!--[diy=comiis_wz_topad]--><div id="comiis_wz_topad" class="area"><div id="framewSqa7X" class="cl_frame_bm frame move-span cl frame-1"><div id="framewSqa7X_left" class="column frame-1-c"><div id="framewSqa7X_left_temp" class="move-span temp"></div><?php block_display('1565');?></div></div></div><!--[/diy]-->
<?php if($comiis_wz_fl==1 && $cat['others']) { ?>
<div class="comiis_wz_fl cl"<?php if($comiis_wz_nv!=1) { ?> style="margin-top:10px;"<?php } ?>><?php if(is_array($cat['others'])) foreach($cat['others'] as $value) { ?><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"<?php if($value['catid']==$cat['catid']) { ?> class="on"<?php } ?>><?php echo $value['catname'];?></a>
<?php } ?>
</div>
<?php } ?>
<style id="diy_style" type="text/css">#portal_block_1558 {  margin-top:0px !important;margin-right:0px !important;margin-bottom:15px !important;margin-left:0px !important;}#portal_block_1560 {  margin-top:0px !important;margin-right:0px !important;margin-bottom:15px !important;margin-left:0px !important;}#portal_block_1562 {  margin-top:0px !important;margin-right:0px !important;margin-bottom:5px !important;margin-left:0px !important;}#portal_block_1565 {  margin-top:0px !important;margin-right:0px !important;margin-bottom:10px !important;margin-left:0px !important;}#frame6UymC3 {  margin-bottom:10px !important;}</style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<div id="ct" class="ct2 wp comiis_ct cl">
<div class="mn"><?php echo adshow("articlelist/mbm hm/1");?><?php echo adshow("articlelist/mbm hm/2");?><!--[diy=listcontenttop]--><div id="listcontenttop" class="area"></div><!--[/diy]-->
<div class="bm">
<div class="bm_h cl comiis_wz_titname">
<?php if($_G['setting']['rssstatus'] && !$_GET['archiveid']) { ?><a href="portal.php?mod=rss&amp;catid=<?php echo $cat['catid'];?>" class="y xi2 rss" target="_blank" title="RSS">订阅</a><?php } if(($_G['group']['allowpostarticle'] || $_G['group']['allowmanagearticle'] || $categoryperm[$catid]['allowmanage'] || $categoryperm[$catid]['allowpublish']) && empty($cat['disallowpublish'])) { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;catid=<?php echo $cat['catid'];?>" class="y xi2 addnew">发布文章</a>
<?php } ?>
<h2><?php echo $cat['catname'];?></h2>
</div>
<?php if($cat['subs']) { ?>
<div class="bm_c bbda comiis_wz_ejfl">
下级分类:&nbsp;&nbsp;<?php $i = 1;?><?php if(is_array($cat['subs'])) foreach($cat['subs'] as $value) { if($i != 1) { ?><span class="pipe">/</span><?php } ?><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>" class="xi2"><?php echo $value['catname'];?></a><?php $i--;?><?php } ?>
</div>
<?php } ?>
<div class="bm_c xld"><?php if(is_array($list['list'])) foreach($list['list'] as $value) { $highlight = article_title_style($value);?><?php $article_url = fetch_article_url($value);?><dl class="bbda cl">
<dd class="xs2 cl">					
<?php if($comiis_wz_pic==1 && $value['pic']) { ?><div class="comiis_atc"><a href="<?php echo $article_url;?>" target="_blank"><img src="<?php echo $value['pic'];?>" alt="<?php echo $value['title'];?>" class="tn" /></a></div><?php } ?>
<h3 class="comiis_wztit"><a href="<?php echo $article_url;?>" target="_blank" class="xi2" <?php echo $highlight;?>><?php echo $value['title'];?></a> <?php if($value['status'] == 1) { ?>(待审核)<?php } ?></h3>
<div class="comiis_wzbody">
<?php echo $value['summary'];?>
<p>
<?php if($value['catname'] && $cat['subs']) { ?><label><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>" class="xg1"><?php echo $value['catname'];?></a></label>&nbsp;&nbsp;<?php } ?>
<span class="xg1"> <?php echo $value['dateline'];?></span>
<?php if($_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $value['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $value['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage']) { ?>
<span class="xg1">
<span class="pipe">|</span>
<label><a href="portal.php?mod=portalcp&amp;ac=article&amp;op=edit&amp;aid=<?php echo $value['aid'];?>">编辑</a></label>
<span class="pipe">|</span>
<label><a href="portal.php?mod=portalcp&amp;ac=article&amp;op=delete&amp;aid=<?php echo $value['aid'];?>" id="article_delete_<?php echo $value['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">删除</a></label>
</span>
<?php } ?>
</p>
</div>
</dd>
</dl>
<?php } ?>
</div>
<!--[diy=listloopbottom]--><div id="listloopbottom" class="area"><div id="frame3K7F23" class="frame move-span cl frame-1"><div id="frame3K7F23_left" class="column frame-1-c"><div id="frame3K7F23_left_temp" class="move-span temp"></div><?php block_display('1864');?></div></div></div><!--[/diy]-->
</div><?php echo adshow("articlelist/mbm hm/3");?><?php echo adshow("articlelist/mbm hm/4");?><?php if($list['multi']) { ?><div class="pgs cl"><?php echo $list['multi'];?></div><?php } ?>
<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
</div>
<div class="sd pph">
<div class="drag">
<!--[diy=diyrighttop]--><div id="diyrighttop" class="area"><div id="frame6UymC3" class=" frame move-span cl frame-1"><div id="frame6UymC3_left" class="column frame-1-c"><div id="frame6UymC3_left_temp" class="move-span temp"></div><?php block_display('1862');?></div></div></div><!--[/diy]-->
</div>
<?php if($comiis_wz_fl==2 && $cat['others']) { ?>
<div class="comiis_wz_titname cl"><h2>相关分类</h2></div>
<div class="comiis_wz_rfl cl">
<ul><?php if(is_array($cat['others'])) foreach($cat['others'] as $value) { ?><li>&bull; <a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<!--[diy=comiis_wz_rdiy]--><div id="comiis_wz_rdiy" class="area"><div id="frameJytx44" class="cl_frame_bm frame move-span cl frame-1"><div id="frameJytx44_left" class="column frame-1-c"><div id="frameJytx44_left_temp" class="move-span temp"></div><?php block_display('1557');?><?php block_display('1558');?><?php block_display('1559');?><?php block_display('1560');?><?php block_display('1561');?><?php block_display('1562');?><?php block_display('1563');?><?php block_display('1564');?></div></div></div><!--[/diy]-->
<div class="drag">
<!--[diy=diy2]--><div id="diy2" class="area"><div id="frameE6QeSN" class="frame move-span cl frame-1"><div id="frameE6QeSN_left" class="column frame-1-c"><div id="frameE6QeSN_left_temp" class="move-span temp"></div><?php block_display('1863');?></div></div></div><!--[/diy]-->
</div>
</div>
</div>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div><?php include template('common/footer'); ?>