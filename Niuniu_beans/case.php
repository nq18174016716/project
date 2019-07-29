<?php
require_once ('./init.php');
require_once ('header.php');
require_once ('footer.php');

$ab_sql = "SELECT * FROM nnb_case";
$ca_info = $db->get_all($ab_sql);
$smarty->assign('ca_info',$ca_info);

$smarty->display('home/case.tpl');
?>