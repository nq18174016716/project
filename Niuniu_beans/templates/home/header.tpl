
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>牛牛豆</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>
<!-- 头部 -->
<header>
    <nav class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="./images/logo1.png">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <{foreach from=$nav_info item=val}>
                            <li><a href="<{$val['nav_url']}>"><{$val['nav_name']}></a></li>
                    <{/foreach}>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<!-- 轮播图 -->
<section>
    <div class="banner">
        <div class="container-fluid"">
        <div class=" row">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators 指示器-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox" id="bbb">
                    <{foreach from=$banner item=val}>
                        <div class="item">
                            <img src="<{$val['banner_img']}>" alt="" class="img-responsive img-hover">
                        </div>
                    <{/foreach}>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
