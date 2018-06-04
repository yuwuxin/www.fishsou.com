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

        	<a href="portal.php?mod=list&catid=2">行业资讯</a>

            <a href="portal.php?mod=list&catid=69">养殖技术</a>

            <a href="portal.php?mod=list&catid=80">水产价格</a>

            <a href="portal.php?mod=list&catid=26">种苗饲料</a>
            
        </div>

    </div>

<!-- 这下面放DIY模块调用地址 -->

<!--{block/1233}-->

<!--{block/1235}-->

<!--{block/1236}-->

<!--{block/1237}-->

<!--{block/1238}-->

<!-- 结束 -->

<script type="text/javascript" src="template/fishsou_mobile/js/index.js"></script>

</div>

<!--{template common/footer}-->