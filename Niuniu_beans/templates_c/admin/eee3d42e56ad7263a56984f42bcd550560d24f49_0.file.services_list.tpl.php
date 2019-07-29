<?php
/* Smarty version 3.1.33, created on 2019-07-10 22:51:30
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu_beans\templates\admin\services_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d25fb72b3c784_66514237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eee3d42e56ad7263a56984f42bcd550560d24f49' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu_beans\\templates\\admin\\services_list.tpl',
      1 => 1562770285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
  ),
),false)) {
function content_5d25fb72b3c784_66514237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">顶级服务</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">顶级服务</div>
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover dataTable">
                                <tr class="active text-center">
                                    <th>标题</th>
                                    <th>描述</th>
                                    <th>简图</th>
                                </tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ser']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                <tr class="success">
                                    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['ser_name'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['ser_desc'];?>
</td>
                                    <td>
                                        <a href="#" class="thumbnail">
                                            <img src="../<?php echo $_smarty_tpl->tpl_vars['val']->value['ser_img'];?>
" alt="" class="img-responsive">
                                        </a>
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
