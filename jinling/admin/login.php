<?php
require_once('./include/config.php');
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
    $sql = "SELECT user_id,user_name,user_pwd,user_email,user_phone FROM jl_user WHERE user_name='$username' AND user_pwd = '$pwd'";
    $arr = get_one($sql);
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
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>登录</title>
    <meta name="keywords" content="Admin">
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Core CSS  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="css/pages.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>
<body class="login-page">

<!-- Start: Main -->
<div id="main">
    <div class="container">
        <div class="row">
            <div id="page-logo"></div>
        </div>
        <div class="row">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">系统登录入口</div>
                </div>

                <form action="" class="cmxform" id="altForm" method="post">
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="input-group"> <span class="input-group-addon">用户名</span>
                                <input type="text" name="username" class="form-control" autocomplete="off"  placeholder="请输入您的用户名">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group"> <span class="input-group-addon">密&nbsp;&nbsp;&nbsp;码</span>
                                <input type="password" name="pwd" class="form-control" autocomplete="off" placeholder="请输入您的密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group"> <span class="input-group-addon">验证码</span>
                                <input type="text" name="imgcode" class="form-control" autocomplete="off" placeholder="请输入您的验证码">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">看不清换一张</span>
                                <img src="include/imgcode.php" id="code" alt="验证码">
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer"> <span class="panel-title-sm pull-left" style="padding-top: 7px;"></span>
                        <div class="form-group margin-bottom-none">
                            <input type="hidden" value="login" name="action-mark" />
                            <input class="btn btn-primary pull-right" type="submit" name="commit" value="登 录" />
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!-- End: Main -->

</body>
<script>
    var imgcode = document.getElementById('code');
    code.onclick = function(){
        this.src = 'include/imgcode.php?q='+Math.random();
    }
</script>
</html>