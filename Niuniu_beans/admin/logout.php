<?php
	session_start();
	if(!isset($_SESSION['isLogin'])){
		echo '<script>alert("您还未登录");location.href="login.php";</script>';
		return;
	}
	session_destroy();
	echo '<script>alert("您已经退出登录了！");location.href="login.php";</script>';
?>
