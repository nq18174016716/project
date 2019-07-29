<?php
require_once ('./init.php');
require_once ('./iflogin.php');
    if (isset($_GET['edit'])){
        $banner_id = $_GET['edit'];
        $where = "banner_id = $banner_id";
        $sql = "SELECT * FROM nnb_banner WHERE $where";
        $banner = $db->get_one($sql);
        $smarty->assign('banner',$banner);
    }

if (isset($_POST['commit'])){
    if ($_FILES['img']['error'] == 0){
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
        $id = $_POST['id'];
        $condition = "banner_id = $id";
        //删除旧图
        if(file_exists("../".$banner['banner_img'])){
            unlink("../".$banner['banner_img']);
        }
        if(file_exists("../".$banner['banner_thumb'])){
            unlink("../".$banner['banner_thumb']);
        }
        $res_msg = $db->update('nnb_banner',$data,$condition);
        if ($res_msg){
            msg_jump('修改成功','banner_list.php');
        }else{
            msg_jump('修改失败！');
        }
    }
    if ($_FILES['img']['error'] > 0) {
        $data = array(
            'banner_name' => $_POST['name'],
        );
        $id = $_POST['id'];
        $condition = "banner_id = $id";
        $res_msg = $db->update('nnb_banner',$data,$condition);
        if ($res_msg){
            msg_jump('修改成功','banner_list.php');
        }else{
            msg_jump('修改失败！');
        }
    }

}

$smarty->display('admin/banner_edit.tpl');
?>
