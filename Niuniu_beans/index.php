<?php
    require_once ('./init.php');
    require_once ('header.php');
    require_once ('footer.php');

    $ser_sql = "SELECT * FROM nnb_service";
    $ser_info = $db->get_all($ser_sql);
    $smarty->assign('ser',$ser_info);

//    echo '<pre>';
//    var_dump($new_info);
//    die;
    $smarty->display('home/index.tpl');
?>