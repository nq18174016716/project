<?php
/* Smarty version 3.1.33, created on 2019-07-09 18:57:12
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu_beans\templates\admin\about_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2473081f8816_65359388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f3ccfa020f7b531289cddb8a942e12267169680' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu_beans\\templates\\admin\\about_list.tpl',
      1 => 1562669829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
  ),
),false)) {
function content_5d2473081f8816_65359388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">公司介绍</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">公司内容</div>
                        <a href="about_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加资讯</a>
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover dataTable">
                                <tr class="active">
                                    <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                                    <th>介绍</th>
                                    <th>英文介绍</th>
                                    <th width="560">详细介绍</th>
                                    <th width="200">操作</th>
                                </tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['about']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                <tr class="success">
                                    <td class="text-center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['about_id'];?>
" name="idarr[]" class="cbox"></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['about_title'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['about_eng'];?>
</td>
                                    <td width="560"><?php echo $_smarty_tpl->tpl_vars['val']->value['about_content'];?>
</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="about_edit.php?edit=<?php echo $_smarty_tpl->tpl_vars['val']->value['about_id'];?>
" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                                            <a onclick="return confirm('确定要删除吗？');" href="?del=<?php echo $_smarty_tpl->tpl_vars['val']->value['about_id'];?>
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
