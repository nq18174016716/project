<?php
/* Smarty version 3.1.33, created on 2019-07-14 15:26:12
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu_beans\templates\home\news_con.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2ad914a96ad3_70922454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94cc4acb74653ee1c88ad944a3e25586cc76ebc8' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu_beans\\templates\\home\\news_con.tpl',
      1 => 1563089165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d2ad914a96ad3_70922454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<link rel="stylesheet" href="./css/index.css">
<link rel="stylesheet" href="./css/news_01.css">
    <!-- 内容部分 -->
    <section id="top">
        <div class="container">
            <div class="row">
                <div>
                    <a href="">当前位置：资讯中心</a>
                    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['new_con']->value['new_con_name'];?>
</h1>
                    <h5 class="text-center">发布时间：<?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['new_con']->value['new_con_time']);?>
</h5>
                    <p style="line-height: 36px;"
                            class="text-left col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <?php echo $_smarty_tpl->tpl_vars['new_con']->value['new_con_content'];?>

                    </p>
                </div>
            </div>
            <div class="row">
                <a href="news.php" class="col-lg-4 col-lg-offset-2">返回资讯页</a>
            </div>
        </div>
    </section>
        <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
