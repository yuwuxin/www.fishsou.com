<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if(CURMODULE != 'logging') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>logging.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<form method="post" autocomplete="off" id="lsform" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;infloat=yes&amp;lssubmit=yes" onsubmit="<?php if($_G['setting']['pwdsafety']) { ?>pwmd5('ls_password');<?php } ?>return lsSubmit();">
<div class="fastlg">
<span id="return_ls" style="display:none"></span>
<div class="comiis_toplogin z">
<?php if(!empty($_G['setting']['pluginhooks']['global_login_text'])) echo $_G['setting']['pluginhooks']['global_login_text'];?>
</div>
<div class="z pns">
<table cellspacing="0" cellpadding="0">
<tr>
<td style="padding:0 0 0 5px !important;"><label for="ls_username" class="z psw_w">帐号 <input type="text" name="username" id="ls_username" autocomplete="off" class="px vm comiis_tbdlk" tabindex="901" /></label></td>
<td style="padding:0 0 0 8px !important;"><label for="ls_password" class="z psw_w">密码 <input type="password" name="password" id="ls_password" class="px vm comiis_tbdlk" autocomplete="off" tabindex="902" /></label></td>
<td class="fastlg_l bb0" style="padding:0 0 0 8px !important;"><button type="submit" class="pn vm comiis_dlans" tabindex="903" title="登录">登录</button></td>
<td style="padding:0px !important;" class="kmreg"><a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" style="color:#fff;">注册</a><a href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&action=login&viewlostpw=1')" style="padding-right:0px;color:#fff;">忘记密码</a></td>
</tr>
</table>
<input type="hidden" name="cookietime" id="ls_cookietime" value="2592000">
<input type="hidden" name="quickforward" value="yes" />
<input type="hidden" name="handlekey" value="ls" />
</div>
</div>
</form>
<?php if($_G['setting']['pwdsafety']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>md5.js?<?php echo VERHASH;?>" type="text/javascript" reload="1"></script>
<?php } } ?>