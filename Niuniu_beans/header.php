<?php

    $hd_sql = "SELECT * FROM nnb_nav WHERE parent_id =0";
    $nav_info = $db->get_all($hd_sql);
    $smarty->assign('nav_info', $nav_info);

    $ba_sql = "SELECT * FROM nnb_banner LIMIT 0,3";
    $ba_info = $db->get_all($ba_sql);
    $smarty->assign('banner',$ba_info);

?>