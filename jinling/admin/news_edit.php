<?php
    require_once('include/config.php');
    date_default_timezone_set('PRC');
    if (isset($_GET['edit'])){
        $new_id = $_GET['edit'];
        $where = "new_id = $new_id";
        $sql = "SELECT * FROM jl_new WHERE $where";
    }
    $new_info = get_one($sql);
    if (isset($_POST['sub'])){
        $new_id = $_POST['new_id'];
        $data = array(
            'new_title' => $_POST['new_title'],
            'new_time' => time(),
            'new_content' => $_POST['editorValue'],
            'nav_id' => 5
        );

        $condition = "new_id = $new_id";
        $res = update('jl_new',$data,$condition);
        if ($res){
            msg_jump('修改成功','news_list.php');
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
                                <input type="hidden" name="new_id" value="<?php echo $new_info['new_id']; ?>">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">新闻标题</span>
                                            <input type="text" name="new_title" value="<?php echo $new_info['new_title']?>"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <script type="text/plain" id="myEditor" style="width:100%;height:200px;">
                                        <?php echo $new_info['new_content']; ?>
                                    </script>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="submit" name="sub" value="提交" class="submit btn btn-blue">
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
<link type="text/css" rel="stylesheet" href="umeditor/themes/default/_css/umeditor.css">
<script src="umeditor/umeditor.config.js" type="text/javascript"></script>
<script src="umeditor/editor_api.js" type="text/javascript"></script>
<script src="umeditor/lang/zh-cn/zh-cn.js" type="text/javascript"></script>
<script type="text/javascript">
    var ue = UM.getEditor('myEditor', {
        autoClearinitialContent: false,
        wordCount: false,
        elementPathEnabled: false,
        initialFrameHeight: 300
    });
</script>
</body>

</html>