<?php
require_once('./include/config.php');
//    获取当前页码
if (isset($_GET['page'])) {
    $current = $_GET['page'];
} else {
    $current = 1;
}
//    每页显示的记录数
$limit = 4;
$n = ($current - 1) * $limit;
$size = 4; //最后一条页码
//    查询留言总数
$count_sql = "SELECT COUNT(pro_id) AS count FROM jl_product";
$count = get_one($count_sql);
$count = $count['count'];
$sql = "SELECT * FROM jl_product LIMIT $n,$limit";
$pro_info = get_all($sql);

?>
<link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/css.css">
<?php require_once('header.php'); ?>
    <div class="content">
        <div class="left fl">
            <h1>产品展示<span>Products</span></h1>
                <ul style="width: 700px;">
                    <?php foreach ($pro_info as $item) { ?>
                        <li>
                            <img src="<?php echo $item['pro_thumb']?>" alt="">
                            <p><?php echo $item['pro_name']?></p>
                        </li>
                    <?php } ?>
                </ul>
            <?php echo page($current,$count,$limit,$size,'quotes'); ?>
        </div>

        <?php require_once('./right.php')?>

    </div>

    <?php require_once('./footer.php')?>