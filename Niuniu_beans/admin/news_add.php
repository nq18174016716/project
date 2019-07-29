<?php
    require_once ('./init.php');
    require_once ('./iflogin.php');
    if (isset($_POST['commit'])){
        $title = $_POST['title'];
        $data = array(
            'new_title' => $title,
            'new_content' => $_POST['content'],
            'new_time' => time()
        );
        $res = $db->add('nnb_news',$data);
        $where = "new_title = $title";
        $add_sql = "SELECT MAX(new_id) FROM nnb_news";
        $qwe = $db->get_one($add_sql);
        $aa = $qwe['MAX(new_id)'];
        $data_con= array(
            'new_con_name' => $_POST['title'],
            'new_con_content' => $_POST['new_content'],
            'new_con_time' => time(),
            'new_id' => $aa
        );
        $res_con = $db->add('nnb_news_con',$data_con);
        if($res && $res_con){
            msg_jump('新闻添加成功','news_list.php');
        }else{
            msg_jump('新闻添加失败！');
        }
    }

    $smarty->display('admin/news_add.tpl');
?>
