<?php
//    生成随机的字符串
    function get_str($len=4){
        $char = "1234567890abcdefghijklmnoqrstuvwsyzABCDEFGHIJKLMNOPQRSTUVWSYZ";
        $str = str_shuffle($char); //将字符串打乱
        $str = substr($str,0,$len); //截取四位字符串
        return $str;
    }
//    1.定义验证码宽高
//    $width = 72;
//    $height = 30;
//    验证码函数
    function img_code($width=72,$height=30){
//    2.创建
        $img = imagecreatetruecolor($width, $height);
//    3.验证码添加背景颜色和文字颜色---imagecolorallcoate()
        $bgcolor = imagecolorallocate($img, 91, 157, 227);
//    var_dump($bgcolor);
        $textcolor = imagecolorallocate($img, 255, 0, 0);
//    4.指定图片上画矩形---imagefilledrectangle()
        imagefilledrectangle($img, 0, 0, $width, $height, $bgcolor);
//    5.将文字放入图片
        $code = get_str();
        imagestring($img, 5, 20, 5, $code, $textcolor);
//    6.图片上面加一些点
        for ($i = 0; $i < 40; $i++) {
            $dotcolor = imagecolorallocate($img, mt_rand(0, 155), mt_rand(0, 155), mt_rand(0, 155));
            imagesetpixel($img, mt_rand(0, $width), mt_rand(0, $height), $dotcolor);
        }
//    7.图片上画线
        for ($i = 0; $i < 3; $i++) {
            $linecolor = imagecolorallocate($img, mt_rand(0, 155), mt_rand(0, 155), mt_rand(0, 155));
            imageline($img, mt_rand(1, $width - 1), mt_rand(1, $height - 1), mt_rand(1, $width - 1), mt_rand(1, $height - 1), $linecolor);
        }
//    8.将验证码存入session
        session_start();
        $_SESSION['imgcode'] = strtolower($code);
//    9.输出
        header('Content-Type:image/jpeg');
//    10.输出图像
        imagejpeg($img);
//    11.释放内存
        imagedestroy($img);
    }
    img_code();


?>