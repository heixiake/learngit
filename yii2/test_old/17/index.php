<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/23
 * Time: 6:11 PM
 */

// adapter

class Target
{
    public function request()
    {
        echo '普通请求\n';
    }
}

class Adaptee
{
    public function specificRequest()
    {
        echo '特殊请求\n';
    }
}

class Adapter  extends  Adaptee
{
    public $adaptee;

    public function __construct()
    {
        $this->adaptee = new Adaptee();
    }

    public function request()
    {
        $this->adaptee->specificRequest();
    }
}

$target = new Adapter();
$target->request();