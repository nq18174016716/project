<?php
    require_once ('./init.php');
    require_once ('./iflogin.php');
    if (isset($_GET['edit'])){
        $new_id = $_GET['edit'];
        $where = "nn.new_id = $new_id";
        $sql = "SELECT * FROM nnb_news_con AS nnc LEFT JOIN nnb_news AS nn ON nnc.new_id = nn.new_id WHERE $where";
    }
    $new_info = $db->get_one($sql);
    $smarty->assign('new_info',$new_info);

    if (isset($_POST['sub'])){
        $new_id = $_POST['new_id'];
        $data = array(
            'new_title' => $_POST['title'],
            'new_content' => $_POST['content'],
            'new_time' => time()
        );
        $condition = "new_id = $new_id";
        $res = $db->update('nnb_news',$data,$condition);
        $data_con= array(
            'new_con_name' => $_POST['title'],
            'new_con_content' => $_POST['new_content'],
            'new_con_time' => time(),
        );
        $res_con = $db->update('nnb_news_con',$data_con,$condition);
        if ($res && $res_con){
            msg_jump('资讯修改成功','news_list.php');
        }else{
            msg_jump('资讯修改失败！');
        }
    }

    $smarty->display('admin/news_edit.tpl');
?>
