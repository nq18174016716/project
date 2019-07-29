<{*引用头部模板*}>
<{include file="./header.tpl" title=foo}>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/news.css">

    <!-- 内容头部 -->
    <section id="top">
        <div class="container">
            <div class="row">
                <div>
                    <a href="">当前位置：资讯中心</a>
                    <h1 class="text-center">我们的资讯中心</h1>
                    <span></span>
                    <p class="text-center">NEWS CENTER</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
<!-- 内容样式 -->
<section id="content">
    <div class="container">
        <div class="row">
            <{foreach from=$new item=val}>
            <{if ($val.new_id)%2 == 1}>
            <div style="height: 310px;margin-top: 20px;" class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
                <h2><{date('m-d',$val.new_time)}></h2>
                <h3><{date('Y',$val.new_time)}></h3>
                <p><{$val['new_title']}></p>
                <p><{$val['new_content']}></p>
                <a href="news_con.php?id=<{$val['new_id']}>">more</a>
            </div>
            <div style="height: 330px;" class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-6 hidden-xs">
                <img src="<{$val['new_img']}>" alt="">
            </div>
            <{else}>
            <div style="height: 330px;" class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
                <img src="<{$val['new_img']}>" alt="">
            </div>
            <div style="height: 310px;margin-top: 20px;" class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-6 hidden-xs">
                <h2><{date('m-d',$val.new_time)}></h2>
                <h3><{date('Y',$val.new_time)}></h3>
                <p><{$val['new_title']}></p>
                <p><{$val['new_content']}></p>
                <a href="news_con.php?id=<{$val['new_id']}>">more</a>
            </div>
            <{/if}>
            <div class="clearfix visible-xs-block"></div>
            <{/foreach}>
        </div>
    </div>
</section>
    <!-- 分页符 -->
    <section id="nav">
        <div class="container">
            <div class="row">
                <nav aria-label="Page navigation"
                    class="col-lg-4 col-lg-offset-4 col-md-offset-0 col-md-4 col-md-offset-4 col-sm-offset-0 col-sm-6 col-sm-offset-3 col-xs-12">
                    <ul class="pagination pagination-lg">
                        <{$pg}>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <{*引用尾部模板*}>
    <{include file="./footer.tpl" title=foo}>