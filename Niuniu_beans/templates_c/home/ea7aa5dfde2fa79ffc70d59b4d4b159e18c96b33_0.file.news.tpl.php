<?php
/* Smarty version 3.1.33, created on 2019-07-04 18:21:46
  from 'F:\\phpstudy\PHPTutorial\WWW\Niuniu beans\templates\home\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1dd33a36a2e3_71884205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea7aa5dfde2fa79ffc70d59b4d4b159e18c96b33' => 
    array (
      0 => 'F:\\\\phpstudy\\PHPTutorial\\WWW\\Niuniu beans\\templates\\home\\news.tpl',
      1 => 1562229300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d1dd33a36a2e3_71884205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/news.css">

    <!-- 内容头部 -->
    <section id="top">
        <div class="container">
            <div class="row">
                <div>
                    <a href="">当前位置：资讯中心</a>
                    <h1 class="text-center">我们的资讯中心</h1>
                    <span></span>
                    <p class="text-center">NEWS CENTER</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- 内容样式 -->
    <section id="content">
        <div class="container">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                <?php if (($_smarty_tpl->tpl_vars['val']->value['new_id'])%2 == 1) {?>
                    <div style="height: 310px;margin-top: 20px;" class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
                        <h2><?php echo date('m-d',$_smarty_tpl->tpl_vars['val']->value['new_time']);?>
</h2>
                        <h3><?php echo date('Y',$_smarty_tpl->tpl_vars['val']->value['new_time']);?>
</h3>
                        <p><?php echo $_smarty_tpl->tpl_vars['val']->value['new_title'];?>
</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['val']->value['new_content'];?>
</p>
                        <a href="">more</a>
                    </div>
                    <div style="height: 330px;" class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-6 hidden-xs">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['new_img'];?>
" alt="">
                    </div>
                <?php } else { ?>
                    <div style="height: 330px;" class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['new_img'];?>
" alt="">
                    </div>
                    <div style="height: 310px;margin-top: 20px;" class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-6 hidden-xs">
                        <h2><?php echo date('m-d',$_smarty_tpl->tpl_vars['val']->value['new_time']);?>
</h2>
                        <h3><?php echo date('Y',$_smarty_tpl->tpl_vars['val']->value['new_time']);?>
</h3>
                        <p><?php echo $_smarty_tpl->tpl_vars['val']->value['new_title'];?>
</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['val']->value['new_content'];?>
</p>
                        <a href="">more</a>
                    </div>
                <?php }?>
                <div class="clearfix visible-xs-block"></div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </section>
    <!-- 分页符 -->
    <section id="nav">
        <div class="container">
            <div class="row">
                <nav aria-label="Page navigation"
                    class="col-lg-4 col-lg-offset-4 col-md-offset-0 col-md-4 col-md-offset-4 col-sm-offset-0 col-sm-6 col-sm-offset-3 col-xs-12">
                    <ul class="pagination pagination-lg">
                        <?php echo $_smarty_tpl->tpl_vars['pg']->value;?>

                    </ul>
                </nav>
            </div>
        </div>
    </section>
        <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
