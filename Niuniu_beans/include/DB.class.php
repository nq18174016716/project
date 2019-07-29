<?php
class DB
{
    private $host ;
    private $user ;
    private $pwd ;
    private $dbname ;
    private $conn ;

    public function __construct($host,$user,$pwd,$dbname)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->dbname = $dbname;
        $conn = @mysqli_connect($host, $user, $pwd, $dbname);
        if (!$conn) {
        die('数据库错误：' . mysqli_connect_errno() . ',' . mysqli_connect_error());
        }
        mysqli_query($conn, "SET NAMES UTF8");
        date_default_timezone_set('PRC');
        $this->conn = $conn;
    }

    /**
     *  查询单条记录
     *  @param  $conn   object      数据库链接
     *  @param  $sql    string      SQL语句
     *  @return $data   array       返回结果数组
     */
    function get_one($sql){
        $res = mysqli_query($this->conn,$sql);
        if($res && mysqli_num_rows($res) >0){
            $data = mysqli_fetch_assoc($res);
            return $data;
        }else{
            return 0;
        }

    }
    /**
     *  查询多条数据
     *  @param  $sql    string  SQL语句
     *  @return $data   array   返回结果数组
     */
    function get_all($sql){
        $res = mysqli_query($this->conn, $sql);
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
        $str = '';
        foreach($data as $k => $v){
            $str .= "`$k` = '$v',";
        }
        $str = rtrim($str,',');
        $sql = "UPDATE $table SET $str WHERE $condition";

        $res = mysqli_query($this->conn,$sql);
        if($res && mysqli_affected_rows($this->conn)>0){
            return 1;
        }else{
            return 0;
        }
    }
    /**
     *  @param $conn    object 数据库链接
     *  @param $table   string 数据表名
     *  @data   array   添加的数据
     */
    function add($table,$data){
        $sql = "INSERT INTO `$table`";

        $sql .=" (`".implode("`,`",array_keys($data))."`)";

        $sql .= " VALUES ('".implode("','",$data)."')";

        $result = mysqli_query($this->conn, $sql);

        if($result && mysqli_insert_id($this->conn) > 0){
            return mysqli_insert_id($this->conn);
        }else{
            return 0;
        }
    }

    /**
     * @param $table
     * @param $condition
     * @return int
     */
    function del($table,$condition){
        $sql = "DELETE FROM $table WHERE $condition";
        $res = mysqli_query($this->conn,$sql);
        if ($res && mysqli_affected_rows($this->conn) > 0){
            return 1;
        }else{
            return 0;
        }
    }

}