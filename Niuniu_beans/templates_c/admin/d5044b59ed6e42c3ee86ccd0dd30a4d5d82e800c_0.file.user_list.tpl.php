<?php
/* Smarty version 3.1.33, created on 2019-07-14 21:48:08
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu_beans\templates\admin\user_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2b3298b531e0_54407734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5044b59ed6e42c3ee86ccd0dd30a4d5d82e800c' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu_beans\\templates\\admin\\user_list.tpl',
      1 => 1563112085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
  ),
),false)) {
function content_5d2b3298b531e0_54407734 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <tr class="success">
                                    <td class="text-center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" name="idarr[]" class="cbox"></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>
</td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['user_sex'] == '1') {?>
                                        <?php echo '男';?>

                                        <?php } else { ?>
                                        <?php echo '女';?>

                                        <?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['user_email'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['user_phone'];?>
</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="user_edit.php?edit=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                                            <a onclick="return confirm('确定要删除吗？');" href="?del=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </table>

                            <div class="pull-left">
                                <button name="delall" onclick="return confirm('确定要删除吗？');"  type="submit" class="btn btn-default btn-gradient pull-right delall">
                                    <span class="glyphicons glyphicon-trash"></span>
                                </button>
                            </div>

                            <div class="pull-right">
                                <ul class="pagination" id="paginator-example">
                                    <?php echo $_smarty_tpl->tpl_vars['pg']->value;?>

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
