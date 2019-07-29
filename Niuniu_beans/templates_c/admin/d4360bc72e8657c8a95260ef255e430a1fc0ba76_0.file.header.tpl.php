<?php
/* Smarty version 3.1.33, created on 2019-07-07 22:10:04
  from 'F:\phpstudy\PHPTutorial\WWW\Niuniu beans\templates\admin\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d21fd3c71f526_77269220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4360bc72e8657c8a95260ef255e430a1fc0ba76' => 
    array (
      0 => 'F:\\phpstudy\\PHPTutorial\\WWW\\Niuniu beans\\templates\\admin\\header.tpl',
      1 => 1562508601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d21fd3c71f526_77269220 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>CMS内容管理系统</title>
    <meta name="keywords" content="Admin">
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Core CSS  -->
    <link rel="stylesheet" type="text/css" href="../admin_style/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../admin_style/css/glyphicons.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="../admin_style/css/theme.css">
    <link rel="stylesheet" type="text/css" href="../admin_style/css/pages.css">
    <link rel="stylesheet" type="text/css" href="../admin_style/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="../admin_style/css/responsive.css">

    <!-- Boxed-Layout CSS -->
    <link rel="stylesheet" type="text/css" href="../admin_style/css/boxed.css">

    <!-- Demonstration CSS -->
    <link rel="stylesheet" type="text/css" href="../admin_style/css/demo.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../admin_style/css/custom.css">

    <!-- Core Javascript - via CDN -->
    <?php echo '<script'; ?>
 type="text/javascript" src="../admin_style/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../admin_style/js/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../admin_style/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../admin_style/js/uniform.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../admin_style/js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../admin_style/js/custom.js"><?php echo '</script'; ?>
>
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
    <div class="pull-left"> <a class="navbar-brand" href="#">
            <div class="navbar-logo"><img src="../admin_style/images/logo.png" alt="logo"></div>
        </a> </div>
    <div class="pull-right header-btns">
        <a class="user"><span class="glyphicons glyphicon-user"></span> admin</a>
        <a href="login.php" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
    </div>
</header>
<!-- End: Header -->

<!-- Start: Main -->
<div id="main">
    <!-- Start: Sidebar -->
    <aside id="sidebar" class="affix">
        <div id="sidebar-search">
            <div class="sidebar-toggle"><span class="glyphicon glyphicon-resize-horizontal"></span></div>
        </div>
        <div id="sidebar-menu">
            <ul class="nav sidebar-nav">
                <li>
                    <a href="index.php"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
                </li>
                <li>
                    <a href="nav_manage.php"><span class="glyphicons glyphicon-sort-by-attributes"></span><span class="sidebar-title">导航管理</span></a>
                </li>
                <li> <a href="#sideEight" class="accordion-toggle"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">文章管理</span><span class="caret"></span></a>
                    <ul class="nav sub-nav" id="sideEight" style="">
                        <li><a href="#sideEight-sub" class="accordion-toggle menu-open"><span class="glyphicons glyphicon-record"></span>科技<span class="caret"></span></a>
                            <ul class="nav sub-nav" id="sideEight-sub" style="">
                                <li><a href="article_list.php"><span class="glyphicons glyphicon-minus"></span> 互联网</a></li>
                                <li><a href="#"><span class="glyphicons glyphicon-minus"></span> 数码</a></li>
                                <li><a href="#"><span class="glyphicons glyphicon-minus"></span> IT</a></li>
                                <li><a href="#"><span class="glyphicons glyphicon-minus"></span> 电信</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="glyphicons glyphicon-record"></span> 文化</a></li>
                        <li><a href="#"><span class="glyphicons glyphicon-record"></span> 生活</a></li>
                    </ul>
                </li>
                <li>
                    <a href="cate_list2.php"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">文章分类管理</span></a>
                </li>
                <li>
                    <a href="user_list.php"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">系统管理员</span></a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- End: Sidebar --><?php }
}
