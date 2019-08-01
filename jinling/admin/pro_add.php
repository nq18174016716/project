<?php
    require_once('include/config.php');
    date_default_timezone_set('PRC');
    if (isset($_POST['commit'])){
//        上传大图
        $result = upload('pro_img','../uploads');
//        生成缩略图
        $thumb_path =img_thumb($result['path'],'96','96','../thumb',$result['name']);

        $img_path = trim($result['path'],"\.\.\/");
        $thumb_path = ltrim($thumb_path,"\.\.\/");

        $data = array(
            'pro_name' => $_POST['pro_name'],
            'pro_size' => $_POST['pro_size'],
            'pro_img' => $img_path,
            'pro_thumb' => $thumb_path,
            'pro_desc' => $_POST['pro_desc']
        );
        //    添加
        $res = add('jl_product',$data);
        if ($res){
            msg_jump('产品添加成功','pro_list.php');
        }else{
            msg_jump('产品添加失败！');
        }
    }

?>
<?php require_once('header.php'); ?>
<link rel="stylesheet" href="./css/bootstrap-fileinput.css">
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">添加产品</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加产品</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="pro_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">名称</span>
                                        <input type="text" name="pro_name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">尺寸</span>
                                        <input type="text" name="pro_size" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group" id="uploadForm" enctype='multipart/form-data'>
                                    <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="images/noimage.png" alt="" />
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">上传图片</span>
                                                <span class="fileinput-exists">换一张</span>
                                                <input type="file" name="pro_img" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                            </span>
                                            <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea style="width:100%;height:150px;" name="pro_desc" placeholder="请描述你的图片"></textarea>
                                </div>
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

</body>
<script src="./js/bootstrap-fileinput.js"></script>
</html>