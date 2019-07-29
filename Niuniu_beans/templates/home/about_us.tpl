<{*引用头部模板*}>
<{include file="./header.tpl" title=foo}>
    <link rel="stylesheet" href="./css/about_us.css">
    <!-- 公司简介 -->
    <section id="company">
        <div class="container-fluid">
            <{foreach from=$ab_info item=val}>
            <{if ($val.about_id)%2 == 1}>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-effset-2 col-sm-6 hidden-xs">
                    <img src="<{$val.about_img}>" alt="">
                </div>
                <div class="col-lg-4 col-lg-offset-2 col-md-offset-0 col-md-4 col-md-effset-2 col-sm-offset-0 col-sm-6 col-xs-12">
                    <h1><{$val.about_title}></h1>
                    <span></span>
                    <h4><{$val.about_eng}></h4>
                    <p>
                        <{$val.about_content}>
                    </p>
                </div>
            </div>
            <{else}>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2 col-md-offset-0 col-md-4 col-md-effset-2 col-sm-offset-0 col-sm-6 col-xs-12">
                    <h1><{$val.about_title}></h1>
                    <span></span>
                    <h4><{$val.about_eng}></h4>
                    <p>
                        <{$val.about_content}>
                    </p>
                </div>
                <div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-effset-2 col-sm-6 hidden-xs">
                    <img src="<{$val.about_img}>" alt="">
                </div>
            </div>
            <{/if}>

            <{/foreach}>
            <div class="row">
                <div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-effset-2 col-sm-4 col-xs-12">
                    <img src="./images/about_01.png" alt="">
                    <h4 class="text-center">使命感</h4>
                    <p class="text-center">让每个IT人，都有不一样的人生</p>
                </div>
                <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-effset-1 col-sm-4 col-xs-12">
                    <img src="./images/about_02.png" alt="">
                    <h4 class="text-center">价值观</h4>
                    <p class="text-center">负责任、诚信</p>
                </div>
                <div
                    class="col-lg-2 col-lg-offset-1 col-md-offset-0 col-md-2 col-md-effset-1 col-sm-offset-0 col-sm-4 col-xs-12">
                    <img src="./images/about_03.png" alt="">
                    <h4 class="text-center">愿景</h4>
                    <p class="text-center">打造全球最好的IT服务平台</p>
                </div>
            </div>
        </div>

    </section>
<{*引用尾部模板*}>
<{include file="./footer.tpl" title=foo}>