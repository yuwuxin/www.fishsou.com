<?php

/**
 * Copyright 2001-2099 1314ѧϰ��.
 * This is NOT a freeware, use is subject to license terms
 * $Id: hook.class.php 720 2018-04-25 19:29:54Z zhuge $
 * Ӧ���ۺ����⣺http://www.1314study.com/services.php?mod=issue
 * Ӧ����ǰ��ѯ��QQ 15326940
 * Ӧ�ö��ƿ�����QQ 643306797
 * �����Ϊ 1314ѧϰ����www.1314study.com�� ����������ԭ�����, ����ӵ�а�Ȩ��
 * δ�������ù������ۡ�������ʹ�á��޸ģ����蹺������ϵ���ǻ����Ȩ��
 */

if (!defined('IN_DISCUZ')) {
exit('Access Denied');
}
class plugin_freeaddon_seo_360sitemapauto {

    function global_footer() {
        global $_G;
        if($_G['inshowmessage']) {
					return '';
				}
       	$splugin_setting = $_G['cache']['plugin']['freeaddon_seo_360sitemapauto'];
       	return $splugin_setting['js'] ? $splugin_setting['js'] : '';
    }

}

class mobileplugin_freeaddon_seo_360sitemapauto{
	
	function global_footer_mobile() {
      global $_G;
      if($_G['inshowmessage']) {
				return '';
			}
     	$splugin_setting = $_G['cache']['plugin']['freeaddon_seo_360sitemapauto'];
     	return $splugin_setting['js'] ? $splugin_setting['js'] : '';
  }
  
}


//Copyright 2001-2099 1314ѧϰ��.
//This is NOT a freeware, use is subject to license terms
//$Id: hook.class.php 1165 2018-04-25 11:29:54Z zhuge $
//Ӧ���ۺ����⣺http://www.1314study.com/services.php?mod=issue
//Ӧ����ǰ��ѯ��QQ 15326940
//Ӧ�ö��ƿ�����QQ 643306797
//�����Ϊ 1314ѧϰ����www.1314study.com�� ����������ԭ�����, ����ӵ�а�Ȩ��
//δ�������ù������ۡ�������ʹ�á��޸ģ����蹺������ϵ���ǻ����Ȩ��