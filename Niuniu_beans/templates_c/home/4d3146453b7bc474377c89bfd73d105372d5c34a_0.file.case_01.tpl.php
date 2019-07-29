<?php
/* Smarty version 3.1.33, created on 2019-07-14 22:46:54
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu_beans\templates\home\case_01.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2b405ee26476_55192273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d3146453b7bc474377c89bfd73d105372d5c34a' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu_beans\\templates\\home\\case_01.tpl',
      1 => 1563115609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d2b405ee26476_55192273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<link rel="stylesheet" href="./css/index.css">
<link rel="stylesheet" href="./css/case_01.css">
    <!-- 内容头部 -->
    <section id="top">
        <div class="container">
            <div class="row">
                <div>
                    <a href="">当前位置：案例展示 > 电子商务网站><a href="">电子商务网站</a></a>
                    <h3 class="text-center">优购作品展示</h3>
                    <span></span>
                    <!-- <p class="text-center col-lg-8 col-lg-offset-2">
                        优购网站品牌旗舰店热销耐克、阿迪达斯、百丽、他她、天美意等知名品牌男鞋女鞋和服装。上优购购物，
                        厂家直销，100%专柜正品，10天退换！
                    </p> -->

                </div>
            </div>
        </div>
    </section>
    <!-- 内容主体 -->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class=""">
                    <p class=" text-center col-lg-8 col-lg-offset-2">
                    优购网站品牌旗舰店热销耐克、阿迪达斯、百丽、他她、天美意等知名品牌男鞋女鞋和服装。上优购购物，
                    厂家直销，100%专柜正品，10天退换！
                    </p>
                    <img src="./images/yougou1.jpg" alt="" class="col-lg-8 col-lg-offset-2">
                </div>
                <div class="">
                    <p class="text-center col-lg-8 col-lg-offset-2">
                        优购网站品牌旗舰店热销耐克、阿迪达斯、百丽、他她、天美意等知名品牌男鞋女鞋和服装。上优购购物，
                        厂家直销，100%专柜正品，10天退换！
                    </p>
                    <img src="./images/yougou2.jpg" alt="" class="col-lg-8 col-lg-offset-2">
                </div>
                <div class="">
                    <p class="text-center col-lg-8 col-lg-offset-2">
                        优购网站品牌旗舰店热销耐克、阿迪达斯、百丽、他她、天美意等知名品牌男鞋女鞋和服装。上优购购物，
                        厂家直销，100%专柜正品，10天退换！
                    </p>
                    <img src="./images/yougou3.jpg" alt="" class="col-lg-8 col-lg-offset-2">
                </div>
            </div>
        </div>
    </section>
    <!-- 分页符 -->
    <section id="nav">
        <div class="container">
            <div class="row">
                <ul class="col-lg-8 col-lg-offset-2">
                    <li><a href="">上一个案例</a></li>
                    <li><a href="index.php">返回首页</a></li>
                    <li><a href="">下一个案例</a></li>
                </ul>
            </div>
        </div>
    </section>
        <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
