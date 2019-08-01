<?php
require_once('./include/config.php');
date_default_timezone_set('PRC');
if (isset($_POST['commit'])){

    $data = array(
        'nav_id' => 4,
        'kleage_title' => $_POST['kleage_title'],
        'kleage_content' => $_POST['kl_con'],
        'kleage_time' => time()
    );
    $table = 'jl_kleage';
    $res = add($table,$data);
//    pre($res);
    if ($res){
        msg_jump('添加成功','knowledge.php');
    }else{
        msg_jump('添加失败！');
    }
}

?>
<link rel="stylesheet" href="./css/gbook.css">
<?php require_once('header.php'); ?>
    <div class="content">
        <div class="left fl">
            <h1>客户留言<span>Guestbook</span></h1>
            <form action="#" name="form1" method="post">
                标题：
                <input type="text" name="kleage_title"><br>
                内容：
                <textarea name="kl_con" cols="70" rows="10"></textarea><br>
                <input type="submit" name="commit" onclick="return validate()">
            </form>            
        </div>
        <?php require_once('./right.php')?>
    </div>
    <?php require_once('./footer.php')?>
