<?php
    require_once ('./init.php');
    require_once ('header.php');
    require_once ('footer.php');

    $sol_sql = "SELECT * FROM nnb_solve";
    $sol_info = $db->get_all($sol_sql);
    $smarty->assign('sol',$sol_info);

    $smarty->display('home/solve.tpl');
?>