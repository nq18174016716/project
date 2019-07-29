<{*引用头部模板*}>
<{include file="./header.tpl" title=foo}>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/solve.css">
    <!-- 锚点 -->
    <section id="top">
        <div class="container-fluid">
            <div class="row">
                <ul>
                    <li><a href="#solve1">APP、互动营销小游戏</a></li>
                    <li><a href="#solve2">网站建设公司</a></li>
                    <li><a href="#solve3">电子商务</a></li>
                    <li><a href="#solve4">解决方案</a></li>
                    <li><a href="#solve5">WEB前端技术人员</a></li>
                    <li><a href="#solve6">B/S系统</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- 内容部分 -->
    <section id="content">
        <div class="container-fluid">
            <{foreach from=$sol item=val}>
            <{if ($val.sol_id)%2 == 1}>
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 hidden-xs">
                    <img src="<{$val['sol_img']}>" alt="">
                </div>
                <div class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-6 col-xs-12">
                    <a name="solve1"></a>
                    <h1 class="text-center"><{$val['sol_name']}></h1>
                    <h2 class="text-center"><{$val['sol_eng']}></h2>
                    <p class="text-center" style="width: 80%;margin: auto">
                        <{$val['sol_content']}>
                    </p>
                </div>
            </div>
            <{else}>
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 hidden-xs">
                    <a name="solve2"></a>
                    <h1 class="text-center"><{$val['sol_name']}></h1>
                    <h2 class="text-center"><{$val['sol_eng']}></h2>
                    <p class="text-center" style="width: 80%;margin: auto">
                        <{$val['sol_content']}>
                    </p>
                </div>
                <div class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-6 col-xs-12">
                    <img src="<{$val['sol_img']}>" alt="">
                </div>
            </div>
            <{/if}>

            <{/foreach}>

        </div>
    </section>
    <{*引用尾部模板*}>
    <{include file="./footer.tpl" title=foo}>