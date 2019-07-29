<?php
require_once ('./init.php');
require_once ('./iflogin.php');
    if (isset($_GET['edit'])){
        $about_id = $_GET['edit'];
        $where = "about_id = $about_id";
        $sql = "SELECT * FROM nnb_about WHERE $where";
        $about = $db->get_one($sql);
        $smarty->assign('about',$about);
    }

if (isset($_POST['commit'])){
    if ($_FILES['img']['error'] == 0){
        $IMG = new IMG($res);
        $result = $IMG->upload('img','../uploads');

        $img_path = trim($result['path'],"\.\.\/");
        $data = array(
            'about_title' => $_POST['title'],
            'about_eng' => $_POST['eng'],
            'about_content' => $_POST['content'],
            'about_img' => $img_path,
        );
        $id = $_POST['id'];
        $condition = "about_id = $id";
        //删除旧图
        if(file_exists("../".$about['about_img'])){
            unlink("../".$about['about_img']);
        }
        $res_msg = $db->update('nnb_about',$data,$condition);
        if ($res_msg){
            msg_jump('修改成功','about_list.php');
        }else{
            msg_jump('修改失败！');
        }
    }
    if ($_FILES['img']['error'] > 0) {
        $data = array(
            'about_title' => $_POST['title'],
            'about_eng' => $_POST['eng'],
            'about_content' => $_POST['content'],
        );
        $id = $_POST['id'];
        $condition = "about_id = $id";
        $res_msg = $db->update('nnb_about',$data,$condition);
        if ($res_msg){
            msg_jump('修改成功','about_list.php');
        }else{
            msg_jump('修改失败！');
        }
    }

}

$smarty->display('admin/about_edit.tpl');
?>
