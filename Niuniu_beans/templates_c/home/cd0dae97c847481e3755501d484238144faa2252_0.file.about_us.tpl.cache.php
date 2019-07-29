<?php
/* Smarty version 3.1.33, created on 2019-07-04 18:41:11
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu beans\templates\home\about_us.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1dd7c7673288_61240572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd0dae97c847481e3755501d484238144faa2252' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu beans\\templates\\home\\about_us.tpl',
      1 => 1562233160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d1dd7c7673288_61240572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9067352355d1dd7c7628f00_47067054';
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
    <link rel="stylesheet" href="./css/about_us.css">
    <!-- 公司简介 -->
    <section id="company">
        <div class="container-fluid">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ab_info']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
            <?php if (($_smarty_tpl->tpl_vars['val']->value['about_id'])%2 == 1) {?>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-effset-2 col-sm-6 hidden-xs">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['about_img'];?>
" alt="">
                </div>
                <div class="col-lg-4 col-lg-offset-2 col-md-offset-0 col-md-4 col-md-effset-2 col-sm-offset-0 col-sm-6 col-xs-12">
                    <h1><?php echo $_smarty_tpl->tpl_vars['val']->value['about_title'];?>
</h1>
                    <span></span>
                    <h4><?php echo $_smarty_tpl->tpl_vars['val']->value['about_eng'];?>
</h4>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['val']->value['about_content'];?>

                    </p>
                </div>
            </div>
            <?php } else { ?>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2 col-md-offset-0 col-md-4 col-md-effset-2 col-sm-offset-0 col-sm-6 col-xs-12">
                    <h1><?php echo $_smarty_tpl->tpl_vars['val']->value['about_title'];?>
</h1>
                    <span></span>
                    <h4><?php echo $_smarty_tpl->tpl_vars['val']->value['about_eng'];?>
</h4>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['val']->value['about_content'];?>

                    </p>
                </div>
                <div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-effset-2 col-sm-6 hidden-xs">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['about_img'];?>
" alt="">
                </div>
            </div>
            <?php }?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="row">
                <div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-effset-2 col-sm-4 col-xs-12">
                    <img src="./images/about_01.png" alt="">
                    <h4 class="text-center">使命感</h4>
                    <p class="text-center">让每个IT人，都有不一样的人生</p>
                </div>
                <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-effset-1 col-sm-4 col-xs-12">
                    <img src="./images/about_02.png" alt="">
                    <h4 class="text-center">价值观</h4>
                    <p class="text-center">负责任、诚信</p>
                </div>
                <div
                    class="col-lg-2 col-lg-offset-1 col-md-offset-0 col-md-2 col-md-effset-1 col-sm-offset-0 col-sm-4 col-xs-12">
                    <img src="./images/about_03.png" alt="">
                    <h4 class="text-center">愿景</h4>
                    <p class="text-center">打造全球最好的IT服务平台</p>
                </div>
            </div>
        </div>

    </section>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
