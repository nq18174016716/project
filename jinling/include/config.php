<?php
        // 连接数据库
    $host = 'localhost';
    $user = 'root';
    $pwd = 'root';
    $db = 'jinling';

    $conn = @mysqli_connect($host, $user, $pwd, $db);
    // @ 符号，忽略错误和警告

    if (!$conn) {
        die('数据库错误：' . mysqli_connect_errno() . ',' . mysqli_connect_error());
    }
    // 设置编码
    mysqli_query($conn, "SET NAMES UTF8");

    date_default_timezone_set('PRC');

    require_once('function.php');