<?php
    define('ROOT',str_replace('\\','/',dirname(__FILE__)));
    require_once ROOT.'/include/smarty/libs/Smarty.class.php';
    $smarty = new Smarty();

    $smarty->setTemplateDir(ROOT.'/templates');
    $smarty->setCompileDir(ROOT.'/templates_c/home');
    $smarty->setCacheDir(ROOT.'/smarty_cache/home');

    $smarty->setCaching(false);//是否使用缓存，项目在调试期间，不建议启用缓存
//    $smarty->caching = false;
    $smarty->setCacheLifetime(20);// 设置缓存时间
//    $smarty->cache_lifetime=60*60*24;


//左右边界符，默认为{}
//    $smarty->left_delimiter = "<{";
    $smarty->setLeftDelimiter("<{");
//    $smarty->right_delimiter = "}>";
    $smarty->setRightDelimiter("}>");

    require_once (ROOT.'/include/DB.class.php');
    $db = new DB('localhost','root','root','nn_beans');


?>
