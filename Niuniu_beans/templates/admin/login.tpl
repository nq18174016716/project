<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<title>后台管理系统</title>
	<meta name="keywords" content="Admin">
	<meta name="description" content="Admin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Core CSS  -->
	<link rel="stylesheet" type="text/css" href="../admin_style/css/bootstrap.css">
	
	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="../admin_style/css/theme.css">
	<link rel="stylesheet" type="text/css" href="../admin_style/css/pages.css">
	<link rel="stylesheet" type="text/css" href="../admin_style/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="../admin_style/css/responsive.css">

	<!-- Boxed-Layout CSS -->
	<link rel="stylesheet" type="text/css" href="../admin_style/css/boxed.css">

	<!-- Demonstration CSS -->
	<link rel="stylesheet" type="text/css" href="../admin_style/css/demo.css">

	<!-- Your Custom CSS -->
	<link rel="stylesheet" type="text/css" href="../admin_style/css/custom.css">

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
                                <img src="../include/imgcode.php" id="code" alt="验证码">
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

<!-- Core Javascript - via CDN --> 
<script src="../admin_style/js/jquery.min.js"></script>
<script src="../admin_style/js/jquery-ui.min.js"></script>
<script src="../admin_style/js/bootstrap.min.js"></script> <!-- Theme Javascript -->
<script type="text/javascript" src="../admin_style/js/uniform.min.js"></script>
<script type="text/javascript" src="../admin_style/js/main.js"></script>
<script type="text/javascript" src="../admin_style/js/custom.js"></script>
<script type="text/javascript">

jQuery(document).ready(function() {

	// Init Theme Core 	  
	Core.init();   
	
});

</script>
</body>
<script>
    var imgcode = document.getElementById('code');
    code.onclick = function(){
        this.src = '../include/imgcode.php?q='+Math.random();
    }
</script>
</html>
