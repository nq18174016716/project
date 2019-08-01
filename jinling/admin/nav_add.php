<?php
    require_once('include/config.php');


    if (isset($_POST['commit'])){
        $data = array(
          'nav_name' => $_POST['name'],
          'nav_url' => $_POST['url'],
        );

        //    添加
        $res = add('jl_nav',$data);
        if ($res){
            msg_jump('导航添加成功','nav_manage.php');
        }else{
            msg_jump('导航添加失败！');
        }
    }

?>
<?php require_once('header.php'); ?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">添加导航</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="nav_add.php" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加导航</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="nav_manage.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">导航名称</span>
                                        <input type="text" name="name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">导航链接</span>
                                        <input type="text" name="url" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;"></textarea>
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
