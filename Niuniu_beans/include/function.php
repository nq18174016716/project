<?php
// 通用函数库
/**
 *  @param $msg string  提示信息
 *  @param $url string  要跳转的地址
 */
function msg_jump($msg,$url=''){
    if($url!=''){
        echo "<script>alert('$msg');location.href='$url';</script>";
    }else{
        echo "<script>alert('$msg');history.back(-1);</script>";
    }
}
function pre($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die;
}