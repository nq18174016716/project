<?php

    // 连接数据库
    $host = 'localhost';
    $user = 'root';
    $pwd = 'root';
    $db = 'jinling';

//    添加函数库
    require_once('database.php');
    require_once('function.php');

    $conn = connect_db($host,$user,$pwd,$db);
//    $conn = connect_db('localhost','root','root','opdzw');

    //定义常量
    define('__CSS__','./css/');//css路径
    define('__JS__','./js/');//js路径
    define('__IMG__','./images/');//静态图片路径

// 设置编码
mysqli_query($conn, "SET NAMES UTF8");

date_default_timezone_set('Asia/Shanghai');

