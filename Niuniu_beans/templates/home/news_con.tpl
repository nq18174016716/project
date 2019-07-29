<{*引用头部模板*}>
<{include file="./header.tpl" title=foo}>
<link rel="stylesheet" href="./css/index.css">
<link rel="stylesheet" href="./css/news_01.css">
    <!-- 内容部分 -->
    <section id="top">
        <div class="container">
            <div class="row">
                <div>
                    <a href="">当前位置：资讯中心</a>
                    <h1 class="text-center"><{$new_con['new_con_name']}></h1>
                    <h5 class="text-center">发布时间：<{date('Y-m-d H:i:s',$new_con['new_con_time'])}></h5>
                    <p style="line-height: 36px;"
                            class="text-left col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <{$new_con['new_con_content']}>
                    </p>
                </div>
            </div>
            <div class="row">
                <a href="news.php" class="col-lg-4 col-lg-offset-2">返回资讯页</a>
            </div>
        </div>
    </section>
    <{*引用尾部模板*}>
    <{include file="./footer.tpl" title=foo}>