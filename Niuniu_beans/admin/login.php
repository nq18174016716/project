<?php
require_once ('./init.php');

    session_start();
    //    判断是否登录
    if(isset($_SESSION['isLogin'])){
        echo '<script>alert("您已经登录了！");location.href="index.php";</script>';
    }
    if(isset($_POST['commit'])){
        $username = $_POST['username'];
        $pwd = md5($_POST['pwd']);
        $imgcode = strtolower($_POST['imgcode']);
        if ($imgcode != $_SESSION['imgcode']){
            echo '<script>alert("验证码错误");location.href="login.php";</script>';
            return;
        }
        $sql = "SELECT user_id,user_name,user_pwd,user_email,user_phone FROM nnb_user WHERE user_name='$username' AND user_pwd = '$pwd'";
        $arr = $db->get_one($sql);
        if ($arr >0){
            $_SESSION['user_id'] = $arr['user_id'];
            $_SESSION['username'] = $arr['user_name'];
            $_SESSION['email'] = $arr['user_email'];
            $_SESSION['phone'] = $arr['user_phone'];
            $_SESSION['isLogin'] = 1;
            echo '<script>alert("登录成功");location.href="index.php";</script>';
        }else{
            echo '<script>alert("账号或密码错误，请重新登录");location.replace();</script>';
        }
    }
$smarty->display('admin/login.tpl');
?>