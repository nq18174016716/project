<?php
require_once ('./init.php');
require_once ('./iflogin.php');

    if (isset($_POST['commit'])){
        $data = array(
            'user_name' => $_POST['name'],
            'user_pwd' => md5($_POST['pwd']),
            'user_sex' => $_POST['sex'],
            'user_email' => $_POST['email'],
            'user_phone' => $_POST['phone'],
            'user_desc' => $_POST['desc'],
        );
        $res = $db->add('nnb_user',$data);
        if ($res){
            msg_jump('管理员添加成功','user_list.php');
        }else{
            msg_jump('管理员添加失败！');
        }
    }
$smarty->display('admin/user_add.tpl');
?>