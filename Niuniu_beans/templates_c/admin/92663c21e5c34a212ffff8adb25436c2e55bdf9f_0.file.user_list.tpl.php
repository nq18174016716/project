<?php
/* Smarty version 3.1.33, created on 2019-07-04 18:12:13
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu beans\templates\admin\user_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1dd0fd94bab7_03176135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92663c21e5c34a212ffff8adb25436c2e55bdf9f' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu beans\\templates\\admin\\user_list.tpl',
      1 => 1562235044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
  ),
),false)) {
function content_5d1dd0fd94bab7_03176135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
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
                  <a href="user_add.html" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加管理员</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                        <th>账号</th>
                        <th>添加时间</th>
                        <th width="200">操作</th>
                      </tr>
                    	<tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td>admin</td>
                        <td>2015-01-10</td>
                        <td>
		                      <div class="btn-group">
		                        <a href="user_edit.html" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
		                        <a onclick="return confirm('确定要删除吗？');" href="#" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
		                      </div>
                        
                        </td>
                      </tr>
                      <tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td>admin2</td>
                        <td>2015-01-10</td>
                        <td>
                          <div class="btn-group">
                            <a href="user_edit.html" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                            <a onclick="return confirm('确定要删除吗？');" href="#" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                          </div>
                        
                        </td>
                      </tr>
                      <tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td>admin3</td>
                        <td>2015-01-10</td>
                        <td>
                          <div class="btn-group">
                            <a href="user_edit.html" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                            <a onclick="return confirm('确定要删除吗？');" href="#" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                          </div>
                        
                        </td>
                      </tr>
                  </table>
                  
                  <div class="pull-left">
                  	<button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
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
</html><?php }
}
