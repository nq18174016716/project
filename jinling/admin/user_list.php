<?php
    require_once('include/config.php');
    $sql = "SELECT * FROM jl_user";
    $user = get_all($sql);

    if (isset($_GET['del'])){
        $del_id = $_GET['del'];
        $condition = "user_id = $del_id";
        $res = del('jl_user',$condition);
        if ($res){
            msg_jump('删除成功','user_list.php');
        }else{
            msg_jump('删除失败！');
        }
    }

    if (isset($_POST['delall'])){
        $idarr = $_POST['idarr'];
        $ids_str = implode(',',$idarr);
        $condition = "user_id IN($ids_str)";

        $del_res = del('jl_user',$condition);
        if ($del_res){
            msg_jump('批量删除成功','user_list.php');
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
        <li class="active">系统管理员</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">系统管理员</div>
                  <a href="user_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加管理员</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                        <th>用户名</th>
                        <th>性别</th>
                        <th>邮箱</th>
                        <th>电话</th>
                        <th width="200">操作</th>
                      </tr>
                      <?php if ($user){foreach ($user as $item) { ?>
                          <tr class="success">
                              <td class="text-center"><input type="checkbox" value="<?php echo $item['user_id']; ?>" name="idarr[]" class="cbox"></td>
                              <td><?php echo $item['user_name'] ?></td>
                              <td><?php echo $item['user_sex']==1 ? '男' : '女';  ?></td>
                              <td><?php echo $item['user_email'] ?></td>
                              <td><?php echo $item['user_phone'] ?></td>
                              <td>
                                  <div class="btn-group">
                                      <a href="user_edit.php?edit=<?php echo $item['user_id']?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                                      <a onclick="return confirm('确定要删除吗？');" href="?del=<?php echo $item['user_id']?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
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
                  
                  <div class="pull-right">
                    <ul class="pagination" id="paginator-example">
                      <li><a href="#">&lt;</a></li>
                      <li><a href="#">&lt;&lt;</a></li>
                      <li><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&gt;</a></li>
                      <li><a href="#">&gt;&gt;</a></li>
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