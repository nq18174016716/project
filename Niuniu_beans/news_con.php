<?php
    require_once ('./init.php');
    require_once ('header.php');
    require_once ('footer.php');
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $where = "new_id = $id";
        $sql = "SELECT * FROM nnb_news_con WHERE $where";
        $news = $db->get_one($sql);
        $smarty->assign('new_con',$news);
    }
    $smarty->display('home/news_con.tpl');
?>