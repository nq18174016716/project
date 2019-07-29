<?php
require_once ('./init.php');
require_once ('./iflogin.php');
    if (isset($_POST['commit'])){
        $IMG = new IMG($res,$thumb_path);
        $result = $IMG->upload('img','../uploads');
        $thumb_path =$IMG->img_thumb($result['path'],'200','80','../thumb',$result['name']);
        $img_path = trim($result['path'],"\.\.\/");
        $thumb_path = ltrim($thumb_path,"\.\.\/");
        $data = array(
            'banner_name' => $_POST['name'],
            'banner_img' => $img_path,
            'banner_thumb' => $thumb_path,
        );
        $reses = $db->add('nnb_banner',$data);
        if($reses){
            msg_jump('添加成功','banner_list.php');
        }else{
            msg_jump('添加失败！');
        }
    }

$smarty->display('admin/banner_add.tpl');
?>
