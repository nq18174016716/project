<?php
    require_once('./include/config.php');
    $new_sql ='SELECT * FROM jl_new ORDER BY new_time DESC LIMIT 0,5';
    $new = get_all($new_sql);
    $kl_sql = 'SELECT * FROM jl_kleage';
    $kleage = get_all($kl_sql);
    $pro_sql = "SELECT * FROM jl_product LIMIT 0,3";
    $pro_info = get_all($pro_sql);
?>
<link rel="stylesheet" href="./css/index.css">
<?php require_once('header.php'); ?>
    <div class="content">
        <div class="top">
            <div class="left fl">
                <div class="one">
                    <h1>公司简介<span>About us</span></h1>
                    <p>我公司前身是金能保温材料经营部，因扩大经营规模，
                        于2009年3月变更为金陵贸易有限公 。1994年开始
                        从事保温、保冷、吸音、耐火、化工、建材等产品的
                        经营贸易，对控制产品质量方面具备非常好的经验，
                        是中国东南地区最大的保温材料经营贸易公司之一。
                        公司经营宗旨是：诚信经营，质量第一。欢迎您的洽
                        谈！1994年开始从事保温、保冷、吸音、耐火、化工、
                        建材等产品的经营贸易，对控制产品质量方面具备非常
                        好的经验，是中国东南地区最大的保温材料经营贸易公
                        司之一。公司经营宗旨是：诚信经营，质量第一。
                        欢迎您的洽谈！
                        <span><a href="about_us.php">查看更多...</a></span>
                    </p>
                </div>
                <div class="two">
                    <div class="a">
                        <h1>产品展示<span>Products</span></h1>
                        <a href="product.php">更多...</a>
                    </div>
                    <ul>
                        <?php foreach ($pro_info as $item) { ?>
                            <li>
                                <img src="<?php echo $item['pro_thumb']?>" alt="">
                                <p><?php echo $item['pro_name']?></p>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="right fr">
                <div class="first">
                    <div class="a">
                        <h1>最新公告<span>News</span></h1>
                        <a href="#">更多...</a>
                    </div>
                    <div class="clear"></div>
                    <ul>
                        <?php foreach ($new as $item) { ?>
                            <li>
                                <a href=""><?php echo $item['new_title']; ?></a>
                                <span class="fr"><?php echo date("Y-m-d H:i:s",$item['new_time']) ?></span>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="last">
                    <div class="a">
                        <h1>行业知识<span>Knowleage</span></h1>
                        <a href="knowledge.php">更多...</a>
                    </div>
                    <ul>
                        <?php foreach ($kleage as $item) { ?>
                            <li>
                                <a href=""><?php echo $item['kleage_title']; ?></a>
                                <span class="fr"><?php echo date("Y-m-d H:i:s",$item['kleage_time']) ?></span>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="bottom">
            <h1>友情链接<span>links</span></h1>
            <p>
                凤 凰 网 | 央 视 网 | 中国政府网 | 网　易 | 太平洋电脑网 | 凤 凰 网 | 央 视 网 | 中国政府网 | 网　易 | 太平洋电脑网 | 凤 凰 网 | 央 视 网 | 中国政府网 | 网　易 | 太平洋电脑网
            </p>
        </div>
    </div>

    <?php require_once('./footer.php')?>