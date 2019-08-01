<?php
/**
 * @param $host
 * @param $uesr
 * @param $pwd
 * @param $db
 */
    function connect_db($host ,$user,$pwd,$db){

        $conn = @mysqli_connect($host, $user, $pwd, $db);
        // @ 符号，忽略错误和警告

        if (!$conn) {
            die('数据库错误：' . mysqli_connect_errno() . ',' . mysqli_connect_error());
        }
        return $conn;
    }
