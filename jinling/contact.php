<?php
    require_once('./include/config.php');

    $sql = 'SELECT * FROM jl_config LIMIT 5';
    $conf = get_all($sql);
//    pre($conf);

?>
<link rel="stylesheet" href="./css/contact.css">
<?php require_once('header.php'); ?>

    <div class="content">
        <div class="left fl">
            <div class="one">
                <h1>联系我们<span>Contact us</span></h1>
                <p>
                    <?php
                    foreach ($conf as $item){
                        echo $item['conf_name'] . ':' . $item['conf_value'] . '<br>';
                    }
                    ?>
                </p>
            </div>
            <div class="two">
                <h1>我的位置<span>Map</span></h1>
                <iframe src="./map.php" frameborder="0" width="500px" height="300px"></iframe>
            </div>
        </div>

        <?php require_once('./right.php')?>

    </div>
    <?php require_once('./footer.php')?>