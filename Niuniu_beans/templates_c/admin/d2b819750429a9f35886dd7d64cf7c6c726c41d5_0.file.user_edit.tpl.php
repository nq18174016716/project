<?php
/* Smarty version 3.1.33, created on 2019-07-14 22:26:37
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu_beans\templates\admin\user_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2b3b9d7db556_08726887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2b819750429a9f35886dd7d64cf7c6c726c41d5' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu_beans\\templates\\admin\\user_edit.tpl',
      1 => 1563114380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
  ),
),false)) {
function content_5d2b3b9d7db556_08726887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">修改资讯</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-8 center-column">
                <form action="#" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">管理者修改</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="user_list.php"
                                   class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">性别</span>
                                    <select name="sex" class="form-control">
                                            <option value="1"
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sex'] == '1') {?>
                                                <?php echo 'selected';?>

                                                <?php } else { ?>
                                                <?php echo '';?>

                                                <?php }?>
                                                >男
                                            </option>
                                            <option value="0"
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sex'] == '0') {?>
                                                <?php echo 'selected';?>

                                                <?php } else { ?>
                                                <?php echo '';?>

                                                <?php }?>
                                                >女
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">邮箱</span>
                                        <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">电话</span>
                                        <input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_phone'];?>
" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="desc" style="width:100%;height:150px;"><?php echo $_smarty_tpl->tpl_vars['user']->value['user_desc'];?>
</textarea>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="submit" value="提交" class="submit btn btn-blue" name="commit">
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
<!-- End: Main -->
</body>

</html>
<?php }
}
