<?PHP exit('Access Denied');?>

<!--{template common/header}-->

<!-- header start -->

<link href="template/fishsou_mobile/css/extend_module.css" rel="stylesheet" type="text/css" />



<header class="header rtj1009_header">

    <div class="ren_nav cl">

		<div class="ren_nav_right">

            <button class="MenuOpen btn ren_btn">

                <span data-target="#ren_nav_ymenu" data-toggle="modal"><span class="ren_nav_icon"><span></span></span></span>

            </button>

        </div>

        <a href="javascript:history.back();" class="z ren_fhjt"><span></span></a>

		<div class="ren_top_dqwz z">

			<!--{if $subexists && $_G['page'] == 1}-->

			<span class="display ren_bk_name ren_vm" href="#subname_list">

				<!--{eval echo strip_tags($_G['forum']['name']) ? strip_tags($_G['forum']['name']) : $_G['forum']['name'];}-->

			</span>

			<div id="subname_list" class="subname_list" display="true" style="display:none;">

				<ul>

				<!--{loop $sublist $sub}-->

				<li>

					<a href="forum.php?mod=forumdisplay&fid={$sub[fid]}">{$sub['name']}</a>

				</li>

				<!--{/loop}-->

				</ul>

			</div>

			<!--{else}-->

			<span class="ren_bk_name">

				<!--{eval echo strip_tags($_G['forum']['name']) ? strip_tags($_G['forum']['name']) : $_G['forum']['name'];}-->

			</span>

			<!--{/if}-->

		</div>

    </div>

</header>

<!-- header end -->





<div class="ren_qx_fw rtj1009_m_main m_pb12 cl">

	<div class="ren_qx_xx cl">

		<div class="ren_qx_ui"></div>

        <span class="ren_qx_ts">{lang forum_password_require}</span>

	</div>

	<div class="ren_qx_tj cl">

        <form method="post" autocomplete="off" action="forum.php?mod=forumdisplay&fid=$_G[fid]&action=pwverify">

            <input type="hidden" name="formhash" value="{FORMHASH}" />

            <div class="act_mn cl"><input type="password" name="pw" class="px vm" placeholder="请输入密码" size="25" /></div>

            <div class="act_fai cl"><button class="pn pnc vm" type="submit" name="loginsubmit" value="true">{lang submit}</button></div>

        </form>

    </div>

</div>

<!--{template common/footer}-->
