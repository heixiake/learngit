<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 21/03/2017
 * Time: 11:03 AM
 */
namespace frontend\models;



// 定义类，实现接口
use yii\base\Object;
use yii\db\Connection;

class UserFinder extends Object implements UserFinderInterface
{
    public $db;

    // 从构造函数看，这个类依赖于 Connection
    public function __construct(Connection $db, $config = [])
    {
        $this->db = $db;
        parent::__construct($config);
    }

    public function findUser()
    {
    }
}