<?php
require_once ('./init.php');
require_once ('./iflogin.php');
//    $file = $_SERVER['REQUEST_URI'];
//    if (!$smarty->isCached('admin/nav_manage.tpl',$file)) {
        $current=isset($_GET['page'])? $_GET['page'] : 1;
        $limit = 5;
        $size = 5;
        $n = ($current-1)*$limit;
        $count = $db->get_one("SELECT COUNT(nav_id) AS c FROM nnb_nav");
        $hd_sql = "SELECT * FROM nnb_nav LIMIT $n,$limit";
        $nav_info = $db->get_all($hd_sql);
        $page = new page($current,$count['c'],$limit,$size);
        $pg = $page->page();
        $smarty->assign('nav_info', $nav_info);
        $smarty->assign('pg',$pg);
//    }


        if (isset($_GET['del'])){
                $del_id = $_GET['del'];
                $condition = "nav_id = $del_id";
                $res = $db->del('nnb_nav',$condition);
                if ($res){
                        msg_jump('导航删除成功','nav_manage.php');
                }else{
                        msg_jump('导航删除失败！');
                }
        }

        if (isset($_POST['delall'])){
                $idarr = $_POST['idarr'];
                $ids_str = implode(',',$idarr);
                $condition = "nav_id IN($ids_str)";

                $del_res = del('nnb_nav',$condition);
                if ($del_res){
                        msg_jump('批量删除成功','nav_manage.php');
                }else{
                        msg_jump('批量删除失败！');
                }
        }
    $smarty->display('admin/nav_manage.tpl');
?>

