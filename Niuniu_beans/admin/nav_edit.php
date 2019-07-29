<?php
    require_once ('./init.php');
    require_once ('./iflogin.php');
    //    查询一级导航
    $sql = "SELECT * FROM nnb_nav WHERE parent_id =0";
    $parent_nav = $db->get_all($sql);
    $smarty->assign('parent_nav',$parent_nav);

    if (isset($_GET['edit'])){
        $nav_id = $_GET['edit'];
        $where = "nav_id = $nav_id";
        $sql = "SELECT * FROM nnb_nav WHERE $where";
    }
    $nav_info = $db->get_one($sql);
    $smarty->assign('nav_info',$nav_info);

    if (isset($_POST['sub'])){
        $nav_id = $_POST['nav_id'];
        $data = array(
            'nav_name' => $_POST['name'],
            'nav_url' => $_POST['url'],
            'parent_id' => $_POST['subnav']
        );
        $condition = "nav_id = $nav_id";
        $res = $db->update('nnb_nav',$data,$condition);
        $smarty->assign('res',$res);
        if ($res){
            msg_jump('导航修改成功','nav_manage.php');
        }else{
            msg_jump('导航修改失败！');
        }
    }

$smarty->display('admin/nav_edit.tpl');
?>
