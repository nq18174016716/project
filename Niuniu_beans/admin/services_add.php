<?php
require_once ('./init.php');
require_once ('./iflogin.php');

    if (isset($_POST['commit'])){
        $IMG = new IMG($res);
        $result = $IMG->upload('img','../uploads');
        $img_path = trim($result['path'],"\.\.\/");
        $data = array(
            'ser_name' => $_POST['name'],
            'ser_desc' => $_POST['desc'],
            'ser_img' => $img_path,
        );
        $reses = $db->add('nnb_service',$data);
        if($reses){
            msg_jump('添加成功','services_list.php');
        }else{
            msg_jump('添加失败！');
        }
    }

$smarty->display('admin/services_add.tpl');
?>
