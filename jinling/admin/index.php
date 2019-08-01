<?php
    require_once('header.php');
    $server_info = $_SERVER['SERVER_SOFTWARE'];
    $server_info_arr = explode(' ',$server_info);
?>
<!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
      </ol>
    </div>
    <div class="container">
		<div class="col-md-9">
			<div id="docs-content">
				<h2 class="page-header margin-top-none">个人信息</h2>
                <table class="table">
                    <tr>
                        <td colspan="2">您好，<?php echo $_SESSION['username']; ?></td>
                    </tr>
                    <tr>
                        <td width="100">用户邮箱:</td>
                        <td><?php echo $_SESSION['email']; ?></td>
                    </tr>
                    <tr>
                        <td>用户电话:</td>
                        <td><?php echo $_SESSION['phone']; ?></td>
                    </tr>
                </table>

				<h2 class="page-header margin-top-none">系统信息</h2>
                <table class="table">
                    <tr>
                        <td width="100">操作系统：</td>
                        <td><?php echo $server_info_arr[1]?></td>
                    </tr>
                    <tr>
                        <td>PHP 版本:</td>
                        <td><?php echo $server_info_arr[2]?></td>
                    </tr>
                    <tr>
                        <td>Apache 版本:</td>
                        <td><?php echo $server_info_arr[0]?></td>
                    </tr>
                </table>
			</div>
		</div>
    </div> 
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --></body>

</html>