<?php
    require_once('./include/config.php');

    if (isset($_GET['page'])) {
        $current = $_GET['page'];
    } else {
        $current = 1;
    }
    $limit = 5;
    $n = ($current - 1) * $limit;
    $size = 5; //最后一条页码
    $count_sql = "SELECT COUNT(kleage_id) AS count FROM jl_kleage";
    $count = get_one($count_sql);
    $count = $count['count'];
    $sql = "SELECT * FROM jl_kleage ORDER BY kleage_time DESC LIMIT $n,$limit";
    $kleage = get_all($sql);

?>
<link rel="stylesheet" href="./css/knowledge.css">
<link rel="stylesheet" href="./css/css.css">
<?php require_once('header.php'); ?>
    <div class="content">
        <div class="left fl">
            <h1>行业知识<span>Knowledge</span></h1>
            <ul>
                <?php foreach ($kleage as $item) { ?>
                    <li>
                        <a href=""><?php echo $item['kleage_title']; ?></a>
                        <span class="fr"><?php echo date('Y-m-d H:i:s',$item['kleage_time']); ?></span>
                    </li>
                <?php } ?>
            </ul>
            <div class="clear"></div>
            <?php echo page($current,$count,$limit,$size,'quotes'); ?>
        </div>
        <?php require_once('./right.php')?>
    </div>
    <?php require_once('./footer.php')?>