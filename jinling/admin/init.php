<?php
	//开启session
	session_start();

    //检查是否登录
    if(!(isset($_SESSION['isLogin']) && $_SESSION['isLogin']==1)){
        echo '<script>alert("没有权限，请登录！");location.href="login.php";</script>';
    }