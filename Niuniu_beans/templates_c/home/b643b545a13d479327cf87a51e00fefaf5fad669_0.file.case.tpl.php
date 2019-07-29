<?php
/* Smarty version 3.1.33, created on 2019-07-14 22:44:19
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu_beans\templates\home\case.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2b3fc3433d73_31684846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b643b545a13d479327cf87a51e00fefaf5fad669' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu_beans\\templates\\home\\case.tpl',
      1 => 1563115292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d2b3fc3433d73_31684846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
    <link rel="stylesheet" href="./css/case.css">
    <!-- 内容头部 -->
    <section id="top">
        <div class="container">
            <div class="row">
                <div>
                    <a href="">当前位置：案例展示><a href="">电子商务网站</a></a>
                    <h1 class="text-center">我们的案例</h1>
                    <span></span>
                    <p class="text-center">OUR CESE</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img src="./images/c1.png" alt="">
                </div>
                <div class="col-lg-4">
                    <img src="./images/c2.png" alt="">
                </div>
                <div class="col-lg-4">
                    <img src="./images/c3.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- 内容主体 -->
    <section id="centent">
        <div class="container">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ca_info']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                <div class="col-lg-4">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['case_img'];?>
" alt="">
                    <a href="case_01.php" class="text-center"><?php echo $_smarty_tpl->tpl_vars['val']->value['case_name'];?>
</a>
                    <p class="text-center"><?php echo $_smarty_tpl->tpl_vars['val']->value['case_desc'];?>
...</p>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </section>
    <!-- 内容底部 -->
    <section id="bottom">
        <div class="container">
            <div class="row">
                <a href="">LEARN MORE</a>
            </div>
        </div>
    </section>
        <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
