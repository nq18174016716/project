<?php
/* Smarty version 3.1.33, created on 2019-07-14 14:25:59
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu_beans\templates\home\solve.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2acaf7da1718_09673340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f703eaeb6c577869dbfd706cacfdf0103aebd248' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu_beans\\templates\\home\\solve.tpl',
      1 => 1563085556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d2acaf7da1718_09673340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/solve.css">
    <!-- 锚点 -->
    <section id="top">
        <div class="container-fluid">
            <div class="row">
                <ul>
                    <li><a href="#solve1">APP、互动营销小游戏</a></li>
                    <li><a href="#solve2">网站建设公司</a></li>
                    <li><a href="#solve3">电子商务</a></li>
                    <li><a href="#solve4">解决方案</a></li>
                    <li><a href="#solve5">WEB前端技术人员</a></li>
                    <li><a href="#solve6">B/S系统</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- 内容部分 -->
    <section id="content">
        <div class="container-fluid">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sol']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
            <?php if (($_smarty_tpl->tpl_vars['val']->value['sol_id'])%2 == 1) {?>
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 hidden-xs">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['sol_img'];?>
" alt="">
                </div>
                <div class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-6 col-xs-12">
                    <a name="solve1"></a>
                    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['val']->value['sol_name'];?>
</h1>
                    <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['val']->value['sol_eng'];?>
</h2>
                    <p class="text-center" style="width: 80%;margin: auto">
                        <?php echo $_smarty_tpl->tpl_vars['val']->value['sol_content'];?>

                    </p>
                </div>
            </div>
            <?php } else { ?>
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 hidden-xs">
                    <a name="solve2"></a>
                    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['val']->value['sol_name'];?>
</h1>
                    <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['val']->value['sol_eng'];?>
</h2>
                    <p class="text-center" style="width: 80%;margin: auto">
                        <?php echo $_smarty_tpl->tpl_vars['val']->value['sol_content'];?>

                    </p>
                </div>
                <div class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-6 col-xs-12">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['sol_img'];?>
" alt="">
                </div>
            </div>
            <?php }?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </section>
        <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
