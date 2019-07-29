<?php
/* Smarty version 3.1.33, created on 2019-07-04 18:16:54
  from 'F:\\phpstudy\PHPTutorial\WWW\Niuniu beans\templates\home\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1dd2162f6288_48408714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b255e28f7ae2e93827a08b64afd5b61938da6977' => 
    array (
      0 => 'F:\\\\phpstudy\\PHPTutorial\\WWW\\Niuniu beans\\templates\\home\\index.tpl',
      1 => 1562151728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d1dd2162f6288_48408714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<link rel="stylesheet" href="./css/index.css">
    <!-- 我们主打的服务 -->
    <section id="service">
        <div class="container">
            <div class="row top">
                <h1 class="text-center">我们主打的顶级服务</h1>
                <p class="text-center">OUR SERVICES</p>
            </div>
            <div class="row body">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ser']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['ser_img'];?>
" alt="">
                        <h6 class="text-center"><?php echo $_smarty_tpl->tpl_vars['val']->value['ser_name'];?>
</h6>
                        <p class="text-center">
                            <?php echo $_smarty_tpl->tpl_vars['val']->value['ser_desc'];?>

                        </p>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </section>
    <!-- 我们历年的心血大作 -->
    <section id="case">
        <div class="container">
            <div class="row top">
                <h1 class="text-center"> 我们历年的心血大作</h1>
                <p class="text-center">OUR CASES</p>
            </div>
            <div class="row body">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/ab.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/ac.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/ad.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/ae.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/af.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/ag.png" alt="">
                </div>
            </div>
            <div class="row bottom">
                <a href="" class="text-center">Learn more</a>
            </div>
        </div>
    </section>
    <!-- 我们的发展历程 -->
    <section id="history">
        <div class="container">
            <div class="row top">
                <h1 class="text-center"> 我们的发展历程</h1>
                <span></span>
                <p class="text-center">OUR DEVELOPMENT HISTORY</p>
            </div>
            <div class="row body">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/ah.png" alt="">
                    <h2 class="text-left">牛牛豆公司于2015年3月15号成立</h2>
                    <p class="text-left">
                        在整个经济大环境不好的情况下，但是我们牛牛豆人依然<br>逆境而上，新公司于2015年......
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/ai.png" alt="">
                    <h2 class="text-left">展望2016，牛牛豆继续创造辉煌</h2>
                    <p class="text-left">
                        在整个经济大环境不好的情况下，但是我们牛牛豆人依然<br>逆境而上，新公司于2016年......
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="./images/aj.png" alt="">
                    <h2 class="text-left">展望2016，牛牛豆继续创造辉煌</h2>
                    <p class="text-left">
                        在整个经济大环境不好的情况下，但是我们牛牛豆人依然<br>逆境而上，新公司于2016年......
                    </p>
                </div>
            </div>
            <div class="row bottom">
                <a href="" class="text-center">Learn more</a>
            </div>
        </div>

    </section>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
