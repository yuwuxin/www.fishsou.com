<?PHP exit('Access Denied');?>

<!--{template common/header}-->



<header class="header rtj1009_header">

	<div class="ren_nav cl">

    	<a href="search.php?mod=forum" class="z ren_nav_ss"></a>

		<!--{if $_G['setting']['domain']['app']['mobile']}-->

			{eval $nav = 'http://'.$_G['setting']['domain']['app']['mobile'];}

		<!--{else}-->

			{eval $nav = "forum.php";}

		<!--{/if}-->

		<a class="ren_logo" title="$_G[setting][bbname]" href="$nav"><img src="template/fishsou_mobile/image/logo.png" /></a>

        <div class="ren_nav_right">

            <button class="MenuOpen btn ren_btn">

                <span data-target="#ren_nav_ymenu" data-toggle="modal"><span class="ren_nav_icon"><span></span></span></span>

            </button>

        </div>

    </div>

</header>

<!-- header end -->



<div class="rtj1009_m_portal m_pb49">

	<div class="rtj1009_p_nav">

    	<div class="ren_p_nav">

        	<a href="#">美食</a>

            <a href="#">交友</a>

            <a href="#">求职</a>

            <a href="#">汽车</a>

            <a href="#">情感</a>

        </div>

    </div>



<!-- 这下面放DIY模块调用地址 -->



<!--{block/3}-->

<!--{block/4}-->

<!--{block/5}-->

<!--{block/6}-->

<!--{block/7}-->



<!-- 结束 -->

















<script type="text/javascript" src="template/fishsou_mobile/js/index.js"></script>

</div>

<!--{template common/footer}-->
























