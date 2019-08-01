<?php
require_once('include/config.php');


if (isset($_POST['commit'])){
    $data = array(
        'user_name' => $_POST['name'],
        'user_pwd' => md5($_POST['pwd']),
        'user_sex' => $_POST['sex'],
        'user_email' => $_POST['email'],
        'user_phone' => $_POST['phone'],
        'user_desc' => $_POST['desc'],
    );
    $res = add('jl_user',$data);
    if ($res){
        msg_jump('管理员添加成功','user_list.php');
    }else{
        msg_jump('管理员添加失败！');
    }
}

?>
<?php require_once('header.php'); ?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">添加管理员</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加管理员</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="user_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">用户名</span>
                                        <input type="text" name="name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">密码</span>
                                        <input type="password" name="pwd" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">性别</span>
                                        <select name="sex" class="form-control">
                                            <option value="1">男</option>
                                            <option value="0">女</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">邮箱</span>
                                        <input type="email" name="email" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">电话</span>
                                        <input type="text" name="phone" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="desc" style="width:100%;height:150px;" placeholder="管理员自我介绍"></textarea>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="submit" value="提交" class="submit btn btn-blue" name="commit">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>
<!-- End: Content -->
</div>

</body>

</html>

