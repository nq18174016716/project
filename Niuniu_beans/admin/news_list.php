<?php
    require_once ('./init.php');
    require_once ('./iflogin.php');
    $current=isset($_GET['page'])? $_GET['page'] : 1;
    $limit = 6;
    $size = 6;
    $n = ($current-1)*$limit;
    $count = $db->get_one("SELECT COUNT(new_id) AS c FROM nnb_news");
    $sql = "SELECT * FROM nnb_news ORDER BY new_time DESC LIMIT $n,$limit";
    $news = $db->get_all($sql);
    $page = new page($current,$count['c'],$limit,$size);
    $pg = $page->page();
    $smarty->assign('news',$news);
    $smarty->assign('pg',$pg);


    if (isset($_GET['del'])){
        $del_id = $_GET['del'];
        $condition = "new_id = $del_id";
        $res = $db->del('nnb_news',$condition);
        if ($res){
            msg_jump('删除成功','news_list.php');
        }else{
            msg_jump('删除失败！');
        }
    }

    if (isset($_POST['delall'])){
        $idarr = $_POST['idarr'];
        $ids_str = implode(',',$idarr);
        $condition = "new_id IN($ids_str)";

        $del_res = del('nnb_news',$condition);
        if ($del_res){
            msg_jump('批量删除成功','news_list.php');
        }else{
            msg_jump('批量删除失败！');
        }
    }

$smarty->display('admin/news_list.tpl');
?>
