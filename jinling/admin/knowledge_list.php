<?php
    require_once('./include/config.php');
    $sql = 'SELECT * FROM jl_kleage ORDER BY kleage_time DESC';
    $kl_list = get_all($sql);

    if (isset($_GET['del'])){
        $del_id = $_GET['del'];
        $condition = "kleage_id = $del_id";
        $res = del('jl_kleage',$condition);
        if ($res){
            msg_jump('删除成功','knowledge_list.php');
        }else{
            msg_jump('删除失败！');
        }
    }

    if (isset($_POST['delall'])){
        $idarr = $_POST['idarr'];
        $ids_str = implode(',',$idarr);
        $condition = "kleage_id IN($ids_str)";

        $del_res = del('jl_kleage',$condition);
        if ($del_res){
            msg_jump('批量删除成功','knowledge_list.php');
        }else{
            msg_jump('批量删除失败！');
        }
    }
    require_once('header.php');
?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">新闻管理</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">行内知识</div>
                        <a href="news_all_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加新闻</a>
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <h2 class="panel-body-title">最新新闻</h2>
                            <table class="table table-striped table-bordered table-hover dataTable">
                                <tr class="active">
                                    <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                                    <th>标题</th>
                                    <th>添加时间</th>
                                    <th width="200">操作</th>
                                </tr>
                                <?php if ($kl_list){foreach ($kl_list as $item) { ?>
                                    <tr class="success">
                                        <td class="text-center"><input type="checkbox" value="<?php echo $item['kleage_id']; ?>" name="idarr[]" class="cbox"></td>
                                        <td><?php echo $item['kleage_title'] ?></td>
                                        <td><?php echo date('Y-m-d H:i:s',$item['kleage_time']); ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="knowledge_edit.php?edit=<?php echo $item['kleage_id']?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                                                <a onclick="return confirm('确定要删除吗？');" href="?del=<?php echo $item['kleage_id']?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } }?>
                            </table>

                            <div class="pull-left">
                                <button name="delall" onclick="return confirm('确定要删除吗？');"  type="submit" class="btn btn-default btn-gradient pull-right delall">
                                    <span class="glyphicons glyphicon-trash"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>





    </div>
</section>
<!-- End: Content -->
</div>
<!-- End: Main -->
</body>
</html>