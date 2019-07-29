<?php
    require_once ('./init.php');
    require_once ('./iflogin.php');
    $sql = "SELECT * FROM nnb_nav WHERE parent_id =0";
    $parent_nav = $db->get_all($sql);
    $smarty->assign('parent_nav',$parent_nav);

    if (isset($_POST['commit'])){
        $data = array(
         'nav_name' => $_POST['name'],
         'nav_url' => $_POST['url'],
         'parent_id' => $_POST['subnav']
         );
        $res = $db->add('nnb_nav',$data);
        if($res){
            msg_jump('导航添加成功','nav_manage.php');
        }else{
            msg_jump('导航添加失败！');
        }
    }

$smarty->display('admin/nav_add.tpl');
?>
