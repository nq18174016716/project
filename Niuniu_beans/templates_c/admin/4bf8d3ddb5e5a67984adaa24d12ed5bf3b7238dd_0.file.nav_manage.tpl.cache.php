<?php
/* Smarty version 3.1.33, created on 2019-07-07 21:57:04
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu beans\templates\admin\nav_manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d21fa301dec01_81844183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bf8d3ddb5e5a67984adaa24d12ed5bf3b7238dd' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu beans\\templates\\admin\\nav_manage.tpl',
      1 => 1562507807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
  ),
),false)) {
function content_5d21fa301dec01_81844183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '514598515d21fa301b3b87_92632061';
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">导航管理</li>
        </ol>
    </div>
    <div class="container">

        <div class="row" id="nav_info">
        </div>
    </div>
</section>
<!-- End: Content -->
</div>
<!-- End: Main -->
</body>
</html>
<?php echo '<script'; ?>
>
    function ajax(url){
        var ajax = new XMLHttpRequest();
        ajax.open('GET',url,true);
        ajax.send();
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                if (ajax.status == 200){
                    document.getElementById('nav_info').innerHTML = ajax.responseText;
                } else {
                    alert('请求失败\n');
                }
            }
        }
    }
    window.onload = function () {
        ajax('nav_manage.php');
    }
<?php echo '</script'; ?>
>

<?php }
}
