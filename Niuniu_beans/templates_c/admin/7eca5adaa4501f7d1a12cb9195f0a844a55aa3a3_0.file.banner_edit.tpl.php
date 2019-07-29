<?php
/* Smarty version 3.1.33, created on 2019-07-10 22:08:47
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu_beans\templates\admin\banner_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d25f16f70ff67_99452520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eca5adaa4501f7d1a12cb9195f0a844a55aa3a3' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu_beans\\templates\\admin\\banner_edit.tpl',
      1 => 1562767682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
  ),
),false)) {
function content_5d25f16f70ff67_99452520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<!-- Start: Content -->
<link rel="stylesheet" href="../admin_style/css/bootstrap-fileinput.css">
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">轮播图</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="#" method="post" enctype="multipart/form-data" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加轮播图</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="about_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banner_id'];?>
">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">介绍</span>
                                        <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banner_name'];?>
" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group" id="uploadForm" enctype='multipart/form-data'>
                                    <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="../<?php echo $_smarty_tpl->tpl_vars['banner']->value['banner_img'];?>
" alt="" />
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">换一张</span>
                                                <span class="fileinput-exists">重选</span>
                                                <input type="file" name="img" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                            </span>
                                            <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="submit" name="commit" value="提交" class="submit btn btn-blue">
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
<?php echo '<script'; ?>
 src="../admin_style/js/bootstrap-fileinput.js"><?php echo '</script'; ?>
>
</html><?php }
}
