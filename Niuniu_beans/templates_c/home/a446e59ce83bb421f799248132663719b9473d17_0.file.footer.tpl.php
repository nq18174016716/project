<?php
/* Smarty version 3.1.33, created on 2019-07-09 22:44:06
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu_beans\templates\home\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d24a836894bf9_26898825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a446e59ce83bb421f799248132663719b9473d17' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu_beans\\templates\\home\\footer.tpl',
      1 => 1562147053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d24a836894bf9_26898825 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- 尾部 -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="left col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-4 col-xs-12">
                <h1>24</h1>
                <span></span>
                <h2>小时免费咨询热线</h2>
                <h3>400-889-7654</h3>
            </div>
            <div class="right col-lg-5 col-lg-offset-1 col-md-offset-0 col-md-5 col-md-offset-1  col-sm-8 col-xs-12">
                <ul class="nav nav-pills">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fo_info']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                        <li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['nav_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['nav_name'];?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['code']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['val']->value['conf_value'];?>
</p>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
<?php echo '<script'; ?>
 src="./js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $(".item:eq(0)").addClass('active');
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./js/bootstrap.js"><?php echo '</script'; ?>
>
<?php }
}
