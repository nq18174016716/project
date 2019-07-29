<?php
    require_once ('./init.php');
    require_once ('./iflogin.php');
    $server_info = $_SERVER['SERVER_SOFTWARE'];
    $smarty->assign('server_info',$server_info);
    $server_info_arr = explode(' ',$server_info);
    $smarty->assign('server_info_arr',$server_info_arr);
    $smarty->display('admin/index.tpl');
?>