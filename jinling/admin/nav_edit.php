<?php
require_once('include/config.php');

    if (isset($_GET['edit'])){
        $nav_id = $_GET['edit'];
        $where = "nav_id = $nav_id";
        $sql = "SELECT * FROM jl_nav WHERE $where";
    }
    $nav_info = get_one($sql);

    if (isset($_POST['sub'])){
        $nav_id = $_POST['nav_id'];
        $data = array(
            'nav_name' => $_POST['name'],
            'nav_url' => $_POST['url'],
        );

        $condition = "nav_id = $nav_id";
        $res = update('jl_nav',$data,$condition);
        if ($res){
            msg_jump('导航修改成功','nav_manage.php');
        }else{
            msg_jump('导航修改失败！');
        }
    }


?>
<?php require_once('header.php'); ?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">编辑导航</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="#" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">编辑导航</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="nav_manage.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <input type="hidden" name="nav_id" value="<?php echo $nav_info['nav_id']; ?>">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">导航名称</span>
                                        <input type="text" name="name" value="<?php echo $nav_info['nav_name']; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">导航链接</span>
                                        <input type="text" name="url" value="<?php echo $nav_info['nav_url']; ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;"></textarea>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="submit" value="提交" class="submit btn btn-blue" name="sub">
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
