<?php
// 通用函数库

/**
 *  查询单条记录
 *  @param  $conn   object      数据库链接
 *  @param  $sql    string      SQL语句
 *  @return $data   array       返回结果数组
 */
function get_one($sql){
    global $conn;
    $res = mysqli_query($conn,$sql);

    if($res && mysqli_num_rows($res) >0){

        $data = mysqli_fetch_assoc($res);

    }
    return $data;
}

/**
 *  查询多条数据
 *  @param  $sql    string  SQL语句
 *  @return $data   array   返回结果数组
 */
function get_all($sql){
    global $conn;
    $res = mysqli_query($conn, $sql);
    if ($res && mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $data[] = $row;
        }
    }
    return $data;
}

/**
 *  @param $table  string   数据表名
 *  @param $data    array    提交的数组信息
 *  @param $condition   string 条件
 */
function update($table,$data,$condition){
    global $conn;
    $str = '';
    foreach($data as $k => $v){
        $str .= "`$k` = '$v',";
    }
    $str = rtrim($str,',');
    $sql = "UPDATE $table SET $str WHERE $condition";

    $res = mysqli_query($conn,$sql);
    if($res && mysqli_affected_rows($conn)>0){
        return 1;
    }else{
        return 0;
    }
}

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


/**
 *  @param $conn    object 数据库链接
 *  @param $table   string 数据表名
 *  @data   array   添加的数据
 */
function add($table,$data){
    global $conn;
    // 拼接SQL语句
    $sql = "INSERT INTO `$table`";

    $sql .=" (`".implode("`,`",array_keys($data))."`)";

    $sql .= " VALUES ('".implode("','",$data)."')";

    $result = mysqli_query($conn, $sql);

    if($result && mysqli_insert_id($conn) > 0){
        return mysqli_insert_id($conn);
    }else{
        return 0;
    }
}

function del($table,$condition){
    global $conn;
    $sql = "DELETE FROM $table WHERE $condition";
    $res = mysqli_query($conn,$sql);
    if ($res && mysqli_affected_rows($conn) > 0){
        return 1;
    }else{
        return 0;
    }
}

function pre($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die;
}

function get_url(){
    $url = $_SERVER['PHP_SELF'].'?';
    if ($_GET){
        foreach ($_GET as $k => $v){
            if ($k != 'page'){
                $url .= "$k=$v&";
            }
        }
    }
    return $url;
}
/**
 * @param $current当前页
 * @param $count数据总数
 * @param $limit每页显示条数
 * @param $size每页最后一条页码
 * @param $class
 */
function page($current,$count,$limit,$size,$class='Sabros.us'){
        $str = '';
        if($count > $limit){ //如果总数大于每页显示条数，则分页

            $url = get_url(); //获取地址

            $pages = ceil($count/$limit);//向上取整算出页码总数
            //echo $pages;

        $str .= "<ul class='".$class."'>";
            //首页
            if($current==1){
                $str .= "<li><span class='disabled'>首页</span></li>";
            }else{
                $str .= "<li><a href='".$url."page=1'>首页</a></li>";
                $str .= "<li><a href='".$url."page=".($current-1)."'>上一页</a></li>";
            }
            //当前页小于 ($size/2) 向下取整（页码在size一半之前）
            if($current <= floor($size/2)){
                $start = 1;
                $end = $pages > $size ? $size : $pages;
            }else if ($current > $pages - floor($size/2)){
                $start = $pages - $size + 1 <= 0 ? 1 : $pages - $size + 1; //避免负数出现
                $end = $pages;
            }else{
                $start = $current - floor($size/2);
                $end = $current + floor($size/2);
            }

            for($i=$start;$i<=$end;$i++){
                if($current == $i){
                    $str .= "<li><span class='current'>{$i}</span></li>";
                }else{
                    $str .= "<li><a href='".$url."page=".$i."'>{$i}</a></li>";
                }
            }
            //尾页
            if($current == $pages){ //当前页是最后一页
                $str .= "<li><span class='disabled'>尾页</span>";
            }else{
                $str .= "<li><a href='".$url."page=".($current+1)."'>下一页</a></li>";
                $str .= "<li><a href='".$url."page=".$pages."'>尾页</a></li>";
            }
                    $str .= '</ul>';
        }
    return $str;
}