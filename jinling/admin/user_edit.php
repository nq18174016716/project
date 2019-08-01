<?php
require_once('include/config.php');
if (isset($_GET['edit'])){
    $user_id = $_GET['edit'];
    $where = "user_id = $user_id";
    $sql = "SELECT * FROM jl_user WHERE $where";
}
$user_info = get_one($sql);
if (isset($_POST['commit'])){
    $user_id = $_POST['user_id'];
    $data = array(
        'user_name' => $_POST['name'],
        'user_sex' => $_POST['sex'],
        'user_email' => $_POST['email'],
        'user_phone' => $_POST['phone'],
        'user_desc' => $_POST['desc'],
    );

    $condition = "user_id = $user_id";
    $res = update('jl_user',$data,$condition);
    if ($res){
        msg_jump('修改成功','user_list.php');
    }else{
        msg_jump('修改失败！');
    }
}
require_once('header.php');

?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">修改资讯</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-8 center-column">
                <form action="#" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">编辑文章</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="news_list.php"
                                   class="btn btn-default btn-gradient dropdown-toggle"><span
                                        class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <input type="hidden" name="user_id" value="<?php echo $user_info['user_id']?>">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">用户名</span>
                                        <input type="text" name="name" value="<?php echo $user_info['user_name']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">密码</span>
                                        <input type="password" name="pwd" readonly value="<?php echo $user_info['user_pwd']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">性别</span>
                                        <select name="sex" class="form-control">
                                            <option value="1" <?php echo $user_info['user_sex']==1 ? 'selected' : ''; ?>>男</option>
                                            <option value="0"<?php echo $user_info['user_sex']==0 ? 'selected' : ''; ?>>女</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">邮箱</span>
                                        <input type="email" name="email" value="<?php echo $user_info['user_email']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">电话</span>
                                        <input type="text" name="phone" value="<?php echo $user_info['user_phone']?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="desc" style="width:100%;height:150px;"><?php echo $user_info['user_desc']?></textarea>
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
<!-- End: Main -->
</body>

</html>
