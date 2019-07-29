<{*引用头部模板*}>
<{include file="./header.tpl" title=foo}>
<link rel="stylesheet" href="./css/index.css">
    <!-- 我们主打的服务 -->
    <section id="service">
        <div class="container">
            <div class="row top">
                <h1 class="text-center">我们主打的顶级服务</h1>
                <p class="text-center">OUR SERVICES</p>
            </div>
            <div class="row body">
                <{foreach from=$ser item=val}>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <img src="<{$val['ser_img']}>" alt="">
                        <h6 class="text-center"><{$val['ser_name']}></h6>
                        <p class="text-center">
                            <{$val['ser_desc']}>
                        </p>
                    </div>
                <{/foreach}>
            </div>
        </div>
    </section>
    <!-- 我们历年的心血大作 -->
    <section id="case">
        <div class="container">
            <div class="row top">
                <h1 class="text-center"> 我们历年的心血大作</h1>
                <p class="text-center">OUR CASES</p>
            </div>
            <div class="row body">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/ab.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/ac.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/ad.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/ae.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/af.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/ag.png" alt="">
                </div>
            </div>
            <div class="row bottom">
                <a href="" class="text-center">Learn more</a>
            </div>
        </div>
    </section>
    <!-- 我们的发展历程 -->
    <section id="history">
        <div class="container">
            <div class="row top">
                <h1 class="text-center"> 我们的发展历程</h1>
                <span></span>
                <p class="text-center">OUR DEVELOPMENT HISTORY</p>
            </div>
            <div class="row body">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/ah.png" alt="">
                    <h2 class="text-left">牛牛豆公司于2015年3月15号成立</h2>
                    <p class="text-left">
                        在整个经济大环境不好的情况下，但是我们牛牛豆人依然<br>逆境而上，新公司于2015年......
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/ai.png" alt="">
                    <h2 class="text-left">展望2016，牛牛豆继续创造辉煌</h2>
                    <p class="text-left">
                        在整个经济大环境不好的情况下，但是我们牛牛豆人依然<br>逆境而上，新公司于2016年......
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/aj.png" alt="">
                    <h2 class="text-left">展望2016，牛牛豆继续创造辉煌</h2>
                    <p class="text-left">
                        在整个经济大环境不好的情况下，但是我们牛牛豆人依然<br>逆境而上，新公司于2016年......
                    </p>
                </div>
            </div>
            <div class="row bottom">
                <a href="" class="text-center">Learn more</a>
            </div>
        </div>

    </section>
<{*引用尾部模板*}>
<{include file="./footer.tpl" title=foo}>