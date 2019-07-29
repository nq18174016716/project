<?php
/* Smarty version 3.1.33, created on 2019-07-08 16:36:29
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu beans\templates\admin\nav_table.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d23008d008830_04914985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c83c765af066bd7be1fcfc60e32c40298f11fdb' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu beans\\templates\\admin\\nav_table.html',
      1 => 1562574986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d23008d008830_04914985 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="row" id="nav_info">
</div>

</body>
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
        ajax('nav_table.php');
    }
<?php echo '</script'; ?>
>
</html><?php }
}
