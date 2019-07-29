<?php
    require_once ('./init.php');
    require_once ('header.php');
    require_once ('footer.php');
    $current = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 4;
    $size = 4;
    $n = ($current - 1) * $limit;
    $count = $db->get_one("SELECT COUNT(new_id) AS c FROM nnb_news");
    $new_sql = "SELECT * FROM nnb_news ORDER BY new_time ASC LIMIT $n,$limit";
    $new_info = $db->get_all($new_sql);
    require_once './include/Page.class.php';
    $page = new page($current, $count['c'], $limit, $size, 'digg');
    $pg = $page->page();
    $smarty->assign('new', $new_info);
    $smarty->assign('pg', $pg);
    $smarty->display('home/news.tpl');
?>


