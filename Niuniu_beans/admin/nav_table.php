<?php
    require_once '../include/DB.class.php';
    $db = new DB('localhost','root','root','nn_beans');
    require_once '../include/Page.class.php';
    $current=isset($_GET['page'])? $_GET['page'] : 1;
    $limit = 5;
    $size = 5;
    $n = ($current-1)*$limit;
    $count = $db->get_one("SELECT COUNT(nav_id) AS c FROM nnb_nav");
    $hd_sql = "SELECT * FROM nnb_nav LIMIT $n,$limit";
    $nav_info = $db->get_all($hd_sql);
    $page = new page($current,$count['c'],$limit,$size);
    $pg = $page->page();
//    $smarty->assign('nav_info', $nav_info);
//    $smarty->assign('pg',$pg);
//$smarty->display('admin/nav_table.html');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">导航列表</div>
            <a href="nav_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span>添加导航</a>
        </div>
        <form action="" method="post">
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover dataTable">
                    <tr class="active">
                        <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                        <th>导航名称</th>
                        <th>导航链接</th>
                        <th>二级导航</th>
                        <th>操作</th>
                    </tr>
                    <?php if ($nav_info){foreach ($nav_info as $item) { ?>
                        <tr class="success">
                            <td class="text-center"><input type="checkbox" value="<?php echo $item['nav_id']; ?>" name="idarr[]" class="cbox"></td>
                            <td><?php echo $item['nav_name'] ?></td>
                            <td><?php echo $item['nav_url'] ?></td>
                            <td><?php echo $item['parent_id']==0 ? '否' : '是'; ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="nav_edit.php?edit=<?php echo $item['nav_id']?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                                    <a onclick="return confirm('确定要删除吗？');" href="?del=<?php echo $item['nav_id']?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                                </div>
                            </td>
                        </tr>
                    <?php } } ?>
                </table>

                <div class="pull-left">

                    <button name="delall" onclick="return confirm('确定要删除吗？');"  type="submit" class="btn btn-default btn-gradient pull-right delall">
                        <span class="glyphicons glyphicon-trash"></span>
                    </button>
                </div>
                <div class="pull-right">
                    <ul class="pagination" id="paginator-example">
                        <?php echo $pg ?>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>

