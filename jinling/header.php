<?php
    require_once('./include/config.php');
    $sql = 'SELECT * FROM jl_nav';
    $nav = get_all($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
</head>
<script type="text/javascript">
    window.onload = init;

    function init() {
        date1();
        ti = window.setInterval(date1, 1000);
    }

    function date1() {
        var n = new Date();
        var time = document.getElementById('time');
        time.innerHTML = n.toLocaleString();
    }

    function cl() {
        window.clearInterval(ti);
    }
</script>
<body>
    <div class="header">
        <div class="logo">
            <img src="./images/logo.png" alt="" class="fl">
            <h1 class="fl">金陵贸易有限公司</h1>
            <p class="fr">
                <span>
                    <img src="./images/home.png" alt="">
                </span>
设为首页
                <span>
                    <img src="./images/book.png" alt="">
                </span>
收藏本站
            </p>
            <div class="clear"></div>
        </div>
        <div class="nav">
            <ul>
                <?php foreach ($nav as $item) { ?>
                    <li><a href="<?php echo $item['nav_url']; ?>"><?php echo $item['nav_name']; ?></a></li>
                <?php } ?>
            </ul>
            <p class="fr">
                <img src="images/time.png" alt="">
                <span id="time"></span>
            </p>
            <div class="clear"></div>
        </div>
        <div class="banner">
            <img src="./images/banner.png" alt="">
            <p>
诚信经营
                <span>质量第一</span>
            </p>
        </div>
    </div>