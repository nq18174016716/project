<?php
/* Smarty version 3.1.33, created on 2019-07-14 15:06:04
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu_beans\templates\home\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2ad45c9acb39_07339191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96fad34a24782edc8411febfb018b35fd758e4f2' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu_beans\\templates\\home\\news.tpl',
      1 => 1563087960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d2ad45c9acb39_07339191 (Smarty_Internal_Template $_smarty_tpl) {
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
                <a href="news_con.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['new_id'];?>
">more</a>
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
                <a href="news_con.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['new_id'];?>
">more</a>
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
