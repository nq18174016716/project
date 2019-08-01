<?php
//    获取大图片信息
    $res_addr = '../uploads/2019-06-26/156153011474932.jpg';
    $res_arr = getimagesize($res_addr);

    $origin_w = $res_arr[0];
    $origin_h = $res_arr[1];

    $img = imagecreatefromjpeg($res_addr);

    $img_new_w = 100;
    $img_new_h = 50;
    $img_new = imagecreatetruecolor($img_new_w,$img_new_h);

    $a = imagecopyresized($img_new,$img,20,20,20,20,$img_new_w,$img_new_h,$origin_w,$origin_h);

    imagejpeg($img_new,'thumb/aa.jpg');

    imagedestroy($img_new);
