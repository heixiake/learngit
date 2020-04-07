<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/2
 * Time: 2:15 PM
 */

namespace test;

class DB
{
    public function __construct()
    {
        return __CLASS__.PHP_EOL;
    }
}

class Factor
{
    public static function createDB()
    {
        echo "我产生一个DB实例";
        return new DB();
    }
}



$db = Factor::createDB();
var_dump($db);

$db2 = Factor::createDB();
var_dump($db2);