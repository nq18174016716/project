<?php
/* Smarty version 3.1.33, created on 2019-07-14 17:46:27
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu_beans\templates\admin\news_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2af9f30057d3_44862000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a75df2461711dd5cc181a2713fb823d5cb87cc8c' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu_beans\\templates\\admin\\news_edit.tpl',
      1 => 1563097578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
  ),
),false)) {
function content_5d2af9f30057d3_44862000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">编辑资讯</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="#" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">编辑资讯</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="news_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <input type="hidden" name="new_id" value="<?php echo $_smarty_tpl->tpl_vars['new_info']->value['new_id'];?>
">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">标题</span>
                                        <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['new_info']->value['new_title'];?>
" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;" name="content"><?php echo $_smarty_tpl->tpl_vars['new_info']->value['new_content'];?>
</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;" name="new_content"><?php echo $_smarty_tpl->tpl_vars['new_info']->value['new_con_content'];?>
</textarea>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="submit" name="sub" value="提交" class="submit btn btn-blue">
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

</body>

</html><?php }
}
