<{*引用头部模板*}>
<{include file="./header.tpl" title=foo}>
    <link rel="stylesheet" href="./css/case.css">
    <!-- 内容头部 -->
    <section id="top">
        <div class="container">
            <div class="row">
                <div>
                    <a href="">当前位置：案例展示><a href="">电子商务网站</a></a>
                    <h1 class="text-center">我们的案例</h1>
                    <span></span>
                    <p class="text-center">OUR CESE</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img src="./images/c1.png" alt="">
                </div>
                <div class="col-lg-4">
                    <img src="./images/c2.png" alt="">
                </div>
                <div class="col-lg-4">
                    <img src="./images/c3.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- 内容主体 -->
    <section id="centent">
        <div class="container">
            <div class="row">
                <{foreach from=$ca_info item=val}>
                <div class="col-lg-4">
                    <img src="<{$val['case_img']}>" alt="">
                    <a href="case_01.php" class="text-center"><{$val['case_name']}></a>
                    <p class="text-center"><{$val['case_desc']}>...</p>
                </div>
                <{/foreach}>
            </div>
        </div>
    </section>
    <!-- 内容底部 -->
    <section id="bottom">
        <div class="container">
            <div class="row">
                <a href="">LEARN MORE</a>
            </div>
        </div>
    </section>
    <{*引用尾部模板*}>
    <{include file="./footer.tpl" title=foo}>