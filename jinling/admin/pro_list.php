<?php
    require_once('include/config.php');
    //    获取当前页码
    if (isset($_GET['page'])){
        $current = $_GET['page'];
    }else{
        $current = 1;
    }
    //    每页显示的记录数
    $limit = 5;
    $n = ($current -1)*$limit;
    $size = 5; //最后一条页码
    //    查询留言总数
    $count_sql = "SELECT COUNT(pro_id) AS count FROM jl_product";
    $count = get_one($count_sql);
    $count = $count['count'];

    if (isset($_GET['search']) && !empty($_GET['keyword'])){
        $keyword = $_GET['keyword'];
        $count_sql = "SELECT COUNT(pro_id) AS count FROM jl_product WHERE pro_name LIKE '%$keyword%'";
        $count = get_one($count_sql);
        $count = $count['count'];
        $pro_sql = "SELECT * FROM jl_product WHERE pro_name LIKE '%$keyword%' ORDER BY pro_id DESC LIMIT $n,$limit";
    }else{
        $pro_sql = "SELECT * FROM jl_product ORDER BY pro_id DESC LIMIT $n,$limit";
    }

    $pro_all = get_all($pro_sql);

//    单个删除
    if (isset($_GET['del'])){
        $del_id = $_GET['del'];
        $condition = "pro_id = $del_id";
        $sql = "SELECT * FROM jl_product WHERE $condition";
        $pro_info = get_one($sql);

        if(file_exists("../".$pro_info['pro_img'])){
            unlink("../".$pro_info['pro_img']);
        }
        if(file_exists("../".$pro_info['pro_thumb'])){
            unlink("../".$pro_info['pro_thumb']);
        }
        $res = del('jl_product',$condition);
        if ($res){
            msg_jump('产品删除成功','pro_list.php');
        }else{
            msg_jump('产品删除失败！');
        }
    }

//    批量删除
    if (isset($_POST['delall'])){
        $idarr = $_POST['idarr'];
        $ids_str = implode(',',$idarr);
        $condition = "pro_id IN($ids_str)";
        $sql = "SELECT * FROM jl_product WHERE $condition";
        $pro_info = get_all($sql);
        foreach ($pro_info as $item){
            if(file_exists("../".$item['pro_img'])){
                unlink("../".$item['pro_img']);
            }
            if(file_exists("../".$item['pro_thumb'])){
                unlink("../".$item['pro_thumb']);
            }
        }
        $del_res = del('jl_product',$condition);
        if ($del_res){
            msg_jump('批量删除成功','pro_list.php');
        }else{
            msg_jump('批量删除失败！');
        }
    }
?>
<?php require_once('header.php'); ?>

  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">产品列表</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title col-lg-1">产品列表</div>
                    <form class="form-inline pull-left" method="get">
                        <div class="form-group pull-left" style="width: 280px">
                            <label class="sr-only" for="exampleInputAmount">搜索</label>
                            <div class="input-group">
                                <div class="input-group-addon">搜索</div>
                                <input type="text" name="keyword" class="form-control" id="exampleInputAmount" placeholder="">
                            </div>
                        </div>
                        <button type="submit" name="search" class="btn btn-success">搜素</button>
                    </form>
                  <a href="pro_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加资讯</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                        <th>名称</th>
                        <th>尺寸</th>
                        <th>描述</th>
                        <th>缩略图</th>
                        <th width="200">操作</th>
                      </tr>
                      <?php if ($pro_all){foreach ($pro_all as $item) { ?>
                          <tr class="success">
                              <td class="text-center"><input type="checkbox" value="<?php echo $item['pro_id']; ?>" name="idarr[]" class="cbox"></td>
                              <td><?php echo $item['pro_name'] ?></td>
                              <td><?php echo $item['pro_size'] ?></td>
                              <td><?php echo $item['pro_desc']?></td>
                              <td>
                                  <a href="#" class="thumbnail">
                                      <img src="../<?php echo $item['pro_thumb']?>" alt="" class="img-circle">
                                  </a>
                              </td>
                              <td>
                                  <div class="btn-group">
                                      <a href="pro_edit.php?edit=<?php echo $item['pro_id']?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                                      <a onclick="return confirm('确定要删除吗？');" href="?del=<?php echo $item['pro_id']?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
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
                        <?php echo page($current,$count,$limit,$size); ?>
                    </ul>
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
<script>
    var getall_btn=document.getElementById('selectAll');
    var checkboxes=document.getElementsByClassName('cbox');
    getall_btn.onclick=function () {
        for (var i=0;i<checkboxes.length;i++){
            if (checkboxes[i].checked==true) {
                checkboxes[i].checked=false;
            }else{
                checkboxes[i].checked=true;
            }
        }
    }
</script>