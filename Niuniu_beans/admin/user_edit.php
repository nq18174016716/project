<?php
    require_once ('./init.php');
    require_once ('./iflogin.php');

    if (isset($_GET['edit'])){
        $user_id = $_GET['edit'];
        $where = "user_id = $user_id";
        $sql = "SELECT * FROM nnb_user WHERE $where";
    }
    $user_info = $db->get_one($sql);
    $smarty->assign('user',$user_info);
    if (isset($_POST['commit'])){
        $user_id = $_POST['user_id'];
        $data = array(
            'user_sex' => $_POST['sex'],
            'user_email' => $_POST['email'],
            'user_phone' => $_POST['phone'],
            'user_desc' => $_POST['desc']
        );

        $condition = "user_id = $user_id";
        $res = $db->update('nnb_user',$data,$condition);
        $smarty->assign('res',$res);
        if ($res){
            msg_jump('修改成功','user_list.php');
        }else{
            msg_jump('修改失败！');
        }
    }

    $smarty->display('admin/user_edit.tpl');
?>
