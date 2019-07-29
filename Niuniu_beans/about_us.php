<?php
    require_once ('./init.php');
    require_once ('header.php');
    require_once ('footer.php');
    $ab_sql = "SELECT * FROM nnb_about";
    $ab_info = $db->get_all($ab_sql);
    $smarty->assign('ab_info',$ab_info);
    $smarty->display('home/about_us.tpl');
?>