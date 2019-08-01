<?php
    require_once('include/config.php');
    if (isset($_GET['edit'])){
        $pro_id = $_GET['edit'];
        $where = "pro_id = $pro_id";
        $sql = "SELECT * FROM jl_product WHERE $where";
        $pro_info = get_one($sql);
    }

    if (!empty($_POST) && isset($_POST['sub'])){
//        如果图片切换了
        if ($_FILES['pro_img']['error'] == 0){
//        上传大图
            $result = upload('pro_img','../uploads');
//        生成缩略图
            $thumb_path =img_thumb($result['path'],'96','96','../thumb',$result['name']);

            $img_path = trim($result['path'],"\.\.\/");
            $thumb_path = trim($thumb_path,"\.\.\/");
            $data = array(
                'pro_name' => $_POST['pro_name'],
                'pro_size' => $_POST['pro_size'],
                'pro_img' => $img_path,
                'pro_thumb' => $thumb_path,
                'pro_desc' => $_POST['pro_desc']
            );
            $pro_id = $_POST['pro_id'];
            $condition = "pro_id = $pro_id";
            //删除旧图
            if(file_exists("../".$pro_info['pro_img'])){
                unlink("../".$pro_info['pro_img']);
            }
            if(file_exists("../".$pro_info['pro_thumb'])){
                unlink("../".$pro_info['pro_thumb']);
            }
            $res = update('jl_product',$data,$condition);
            if ($res){
                msg_jump('产品信息修改成功','pro_list.php');
            }else{
                msg_jump('产品信息修改失败！');
            }
        }
        //    图片没切换
        if ($_FILES['pro_img']['error'] > 0) {
            $data = array(
                'pro_name' => $_POST['pro_name'],
                'pro_size' => $_POST['pro_size'],
                'pro_desc' => $_POST['editorValue']
            );
            $pro_id = $_POST['pro_id'];
            $condition = "pro_id = $pro_id";
            $res = update('jl_product',$data,$condition);
            if ($res){
                msg_jump('产品信息修改成功','pro_list.php');
            }else{
                msg_jump('产品信息修改失败！');
            }
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
        <li class="active">修改产品信息</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-10 col-lg-11 center-column">
        <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
        	<div class="panel">
            <div class="panel-heading">
              <div class="panel-title">修改产品信息</div>
              <div class="panel-btns pull-right margin-left">
              <a href="pro_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
            	  </div>
            </div>
                <div class="panel-body">
                    <div class="col-md-7">
                        <input type="hidden" name="pro_id" value="<?php echo $pro_info['pro_id']; ?>">
                        <div class="form-group">
                            <div class="input-group"> <span class="input-group-addon">名称</span>
                                <input type="text" name="pro_name" value="<?php echo $pro_info['pro_name']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group"> <span class="input-group-addon">尺寸</span>
                                <input type="text" name="pro_size" value="<?php echo $pro_info['pro_size']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group" id="uploadForm" enctype='multipart/form-data'>
                            <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                    <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="../<?php echo $pro_info['pro_img']; ?>" alt="" />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">换一张</span>
                                                <span class="fileinput-exists">换一张</span>
                                                <input type="file" name="pro_img" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                            </span>
                                    <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea style="width:100%;height:150px;" name="pro_desc" placeholder="请描述你的图片"><?php echo $pro_info['pro_desc']; ?></textarea>
                        </div>
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

</body>
<script src="./js/bootstrap-fileinput.js"></script>
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