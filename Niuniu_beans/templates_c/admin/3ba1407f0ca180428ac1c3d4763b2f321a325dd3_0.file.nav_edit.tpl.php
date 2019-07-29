<?php
/* Smarty version 3.1.33, created on 2019-07-08 22:25:11
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu_beans\templates\admin\nav_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d23524701d3d9_94685183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ba1407f0ca180428ac1c3d4763b2f321a325dd3' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu_beans\\templates\\admin\\nav_edit.tpl',
      1 => 1562510876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
  ),
),false)) {
function content_5d23524701d3d9_94685183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">编辑导航</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="#" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">编辑导航</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="nav_manage.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <input type="hidden" name="nav_id" value="<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['nav_id'];?>
">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">导航名称</span>
                                        <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['nav_name'];?>
" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">导航链接</span>
                                        <input type="text" name="url" value="<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['nav_url'];?>
" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">导航类型</span>
                                        <select class="form-control" name="subnav">
                                            <optgroup label="一级导航">
                                                <option value="0"<?php if ($_smarty_tpl->tpl_vars['nav_info']->value['parent_id'] == 0) {?>
                                                <?php echo 'selected';?>

                                                <?php } else { ?>
                                                <?php echo '';?>

                                                <?php }?>>一级导航</option>
                                            </optgroup>
                                            <optgroup label="二级导航">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parent_nav']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['nav_id'];?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['nav_info']->value['parent_id'] == $_smarty_tpl->tpl_vars['val']->value['nav_id']) {?>
                                                    <?php echo 'selected';?>

                                                    <?php } else { ?>
                                                    <?php echo '';?>

                                                    <?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['val']->value['nav_name'];?>

                                                </option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;"></textarea>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="submit" value="提交" class="submit btn btn-blue" name="sub">
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

</html>
<?php }
}
