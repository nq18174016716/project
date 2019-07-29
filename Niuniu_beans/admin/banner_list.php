<?php
require_once ('./init.php');
require_once ('./iflogin.php');
    $current=isset($_GET['page'])? $_GET['page'] : 1;
    $limit = 6;
    $size = 6;
    $n = ($current-1)*$limit;
    $count = $db->get_one("SELECT COUNT(banner_id) AS c FROM nnb_banner");
    $sql = "SELECT * FROM nnb_banner LIMIT $n,$limit";
    $banner = $db->get_all($sql);
    $page = new page($current,$count['c'],$limit,$size);
    $pg = $page->page();
    $smarty->assign('banner',$banner);
    $smarty->assign('pg',$pg);


    if (isset($_GET['del'])){
        $del_id = $_GET['del'];
        $condition = "banner_id = $del_id";
        $sql = "SELECT * FROM nnb_banner WHERE $condition";
        $ab_info = $db->get_one($sql);
        if(file_exists("../".$ab_info['banner_img'])){
            unlink("../".$ab_info['banner_img']);
        }
        if(file_exists("../".$ab_info['banner_thumb'])) {
            unlink("../" . $ab_info['banner_thumb']);
        }
        $res_msg = $db->del('nnb_banner',$condition);
        if ($res_msg){
            msg_jump('删除成功','banner_list.php');
        }else{
            msg_jump('删除失败！');
        }
    }

    if (isset($_POST['delall'])){
        $idarr = $_POST['idarr'];
        $ids_str = implode(',',$idarr);
        $condition = "banner_id IN($ids_str)";
        $sql = "SELECT * FROM nnb_banner WHERE $condition";
        $ab_info = $db->_all($sql);
        foreach ($ab_info as $item){
            if(file_exists("../".$ab_info['banner_img'])){
                unlink("../".$ab_info['banner_img']);
            }
            if(file_exists("../".$ab_info['banner_thumb'])) {
                unlink("../" . $ab_info['banner_thumb']);
            }
        }
        $del_res = $db->del('nnb_banner',$condition);
        if ($del_res){
            msg_jump('批量删除成功','banner_list.php');
        }else{
            msg_jump('批量删除失败！');
        }
    }
$smarty->display('admin/banner_list.tpl');
?>
