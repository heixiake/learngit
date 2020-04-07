<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/2
 * Time: 4:14 PM
 */

namespace test;


abstract class Operation
{
    abstract public function getVal($i, $j);
}

class OperationAdd extends Operation
{

    public function getVal($i, $j)
    {
        // TODO: Implement getVal() method.
        return $i + $j;
    }
}

class OperationMul extends Operation
{

    public function getVal($i, $j)
    {
        // TODO: Implement getVal() method.
        return $i * $j;
    }
}

abstract class Factor
{
    abstract static function getInstance();
}

class AddFactor extends Factor
{

    static function getInstance()
    {
        // TODO: Implement getInstance() method.
        return new OperationSub();
    }
}

class MulFactor extends Factor
{

    static function getInstance()
    {
        // TODO: Implement getInstance() method.
        return new OperationMul();
    }
}

class TextFactor extends Factor
{

    static function getInstance()
    {
        // TODO: Implement getInstance() method.
    }
}


$mul = MulFactor::getInstance();
echo $mul->getVal(1,9);