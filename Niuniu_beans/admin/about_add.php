<?php
require_once ('./init.php');
require_once ('./iflogin.php');
    if (isset($_POST['commit'])){
        $IMG = new IMG($res);
        $result = $IMG->upload('img','../uploads');

        $img_path = trim($result['path'],"\.\.\/");
        $data = array(
            'about_title' => $_POST['title'],
            'about_eng' => $_POST['eng'],
            'about_content' => $_POST['content'],
            'about_img' => $img_path,
        );
        $reses = $db->add('nnb_about',$data);
        if($reses){
            msg_jump('添加成功','about_list.php');
        }else{
            msg_jump('添加失败！');
        }
    }

$smarty->display('admin/about_add.tpl');
?>
