<?php
    require_once('include/config.php');
    date_default_timezone_set('PRC');
    if (isset($_POST['commit'])){
        $news = $_POST['id'];
        if ($news == 'kleage'){
            $data = array(
                'kleage_title' => $_POST['title'],
                'kleage_time' => time(),
                'kleage_content' => $_POST['editorValue'],
                'nav_id' => 4
            );
            $res = add('jl_kleage',$data);
            if ($res){
                msg_jump('添加成功','knowledge_list.php');
            }else{
                msg_jump('添加失败！');
            }

        }elseif ($news == 'news'){
            $data = array(
                'new_title' => $_POST['title'],
                'new_time' => time(),
                'new_content' => $_POST['editorValue'],
                'nav_id' => 5
            );
            $res = add('jl_new',$data);
            if ($res){
                msg_jump('添加成功','news_list.php');
            }else{
                msg_jump('添加失败！');
            }
        }

    }
    require_once('header.php');
?>
    <!-- Start: Content -->
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">添加新闻</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="#" method="post" class="cmxform">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">添加文章</div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="news_list.php"
                                       class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">分类</span>
                                            <select name="id" id="standard-list1" class="form-control">
                                                <option>请选择</option>
                                                <option value="kleage">行业知识</option>
                                                <option value="news">最新新闻</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">标题</span>
                                            <input type="text" name="title" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <script type="text/plain" id="myEditor" style="width:100%;height:200px;">

                                    </script>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="submit" name="commit" value="提交" class="submit btn btn-blue">
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
</html>