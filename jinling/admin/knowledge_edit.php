<?php
require_once('include/config.php');
date_default_timezone_set('PRC');
if (isset($_GET['edit'])){
    $kl_id = $_GET['edit'];
    $where = "kleage_id = $kl_id";
    $sql = "SELECT * FROM jl_kleage WHERE $where";
}
$kl_info = get_one($sql);
if (isset($_POST['sub'])){
    $kl_id = $_POST['kleage_id'];
    $data = array(
        'kleage_title' => $_POST['title'],
        'kleage_time' => time(),
        'kleage_content' => $_POST['editorValue'],
        'nav_id' => 4
    );

    $condition = "kleage_id = $kl_id";
    $res = update('jl_kleage',$data,$condition);
    if ($res){
        msg_jump('修改成功','knowledge_list.php');
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
                            <div class="panel-title">行内知识</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="knowledge_list.php"
                                   class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <input type="hidden" name="kleage_id" value="<?php echo $kl_info['kleage_id']; ?>">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">新闻标题</span>
                                        <input type="text" name="title" value="<?php echo $kl_info['kleage_title']?>"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <script type="text/plain" id="myEditor" style="width:100%;height:200px;">
                                        <?php echo $kl_info['kleage_content']; ?>
                                    </script>
                            </div>s
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