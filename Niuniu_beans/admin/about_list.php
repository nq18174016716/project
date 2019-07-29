<?php
require_once ('./init.php');
require_once ('./iflogin.php');

    $current=isset($_GET['page'])? $_GET['page'] : 1;
    $limit = 6;
    $size = 6;
    $n = ($current-1)*$limit;
    $count = $db->get_one("SELECT COUNT(about_id) AS c FROM nnb_about");
    $sql = "SELECT * FROM nnb_about LIMIT $n,$limit";
    $about = $db->get_all($sql);
    $page = new page($current,$count['c'],$limit,$size);
    $pg = $page->page();
    $smarty->assign('about',$about);
    $smarty->assign('pg',$pg);

    if (isset($_GET['del'])){
        $del_id = $_GET['del'];
        $condition = "about_id = $del_id";
        $sql = "SELECT * FROM nnb_about WHERE $condition";
        $ab_info = $db->get_one($sql);
        if(file_exists("../".$ab_info['about_img'])){
            unlink("../".$ab_info['about_img']);
        }
        $res_msg = $db->del('nnb_about',$condition);
        if ($res_msg){
            msg_jump('删除成功','about_list.php');
        }else{
            msg_jump('删除失败！');
        }
    }

    if (isset($_POST['delall'])){
        $idarr = $_POST['idarr'];
        $ids_str = implode(',',$idarr);
        $condition = "about_id IN($ids_str)";
        $sql = "SELECT * FROM nnb_about WHERE $condition";
        $ab_info = $db->_all($sql);
        foreach ($ab_info as $item){
            if(file_exists("../".$item['about_img'])){
                unlink("../".$item['about_img']);
            }
        }
        $del_res = $db->del('nnb_about',$condition);
        if ($del_res){
            msg_jump('批量删除成功','about_list.php');
        }else{
            msg_jump('批量删除失败！');
        }
    }

$smarty->display('admin/about_list.tpl');
?>