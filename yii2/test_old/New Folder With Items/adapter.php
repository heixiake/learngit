<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/3
 * Time: 9:06 AM
 */


interface Target
{
    public function connection($host, $user, $password, $dbname);
    public function query($sql);
    public function close();

}

class MySQLAdaptee implements Target
{
    protected $conn;
    public function connection($host, $user, $password, $dbname)
    {
        $conn = mysql_connect($host, $user, $password);
        mysql_select_db($dbname);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        return mysql_query($sql);
    }

    public function close()
    {
        mysql_close($this->conn);
    }
}

class MySQLiAdaptee implements Target
{
    protected $conn;

    public function connection($host, $user, $password, $dbname)
    {
        $conn = mysqli_connect($host, $user, $password, $dbname);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        return mysqli_query($this->conn, $sql);
    }

    public function close()
    {
        mysqli_close($this->conn);
    }
}

class DataBase implements Target
{
    protected $db;

    public function __construct($type)
    {
            $type = $type.'Adaptee';
            $this->db = new $type;
    }

    public function connection($host, $user, $password, $dbname)
    {
        $this->db->connection($host, $user, $password, $dbname);
    }

    public function query($sql)
    {
        return $this->db->query($sql);
    }

    public function close()
    {
        return $this->db->close();
    }
}


//用户调用同一个接口，使用MySQL和mysqli这两套不同示例。
$db1 = new DataBase('MySQL');
$db1->connection('localhost','root','root','yii2_demo');die;
$db1->query('select * from user');
$db1->close();

$db2 = new DataBase('MySQLi');
$db2->connection('localhost','root','root','yii2_demo');
$row = $db2->query('select * from user');
var_dump($row);
$db2->close();


