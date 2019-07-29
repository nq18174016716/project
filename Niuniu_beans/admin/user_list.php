<?php
require_once ('./init.php');
require_once ('./iflogin.php');

    $current=isset($_GET['page'])? $_GET['page'] : 1;
    $limit = 6;
    $size = 6;
    $n = ($current-1)*$limit;
    $count = $db->get_one("SELECT COUNT(user_id) AS c FROM nnb_user");
    $sql = "SELECT * FROM nnb_user LIMIT $n,$limit";
    $user = $db->get_all($sql);
    $page = new page($current,$count['c'],$limit,$size);
    $pg = $page->page();
    $smarty->assign('user',$user);
    $smarty->assign('pg',$pg);

$smarty->display('admin/user_list.tpl');
?>