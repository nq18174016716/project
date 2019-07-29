<?php
    $fo_sql = "SELECT * FROM nnb_nav WHERE parent_id =0 LIMIT 1,4";
    $fo_info = $db->get_all($fo_sql);
    $smarty->assign('fo_info',$fo_info);

    $co_sql = "SELECT * FROM nnb_config";
    $con_info = $db->get_all($co_sql);
    $smarty->assign('code',$con_info);
?>
