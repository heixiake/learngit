<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/2
 * Time: 2:47 PM
 */

namespace test;


abstract class Operation
{
    abstract public function getVal($i, $j);
}

class OperationMul extends Operation
{

    public function getVal($i, $j)
    {
        return $i * $j;
    }
}

class OperationAdd extends Operation
{
    public function getVal($i, $j)
    {
        // TODO: Implement getVal() method.
        return $i + $j;
    }
}

class OperationSub extends Operation
{
    public function getVal($i, $j)
    {
        // TODO: Implement getVal() method.
        return $i - $j;
    }
}

class CounterFactory
{
    static function createOperation(string $operation)
    {
        return new $operation;
    }
}

//class CounterFactory
//{
//    private static $operation;
//
//    static function createOperation(string $operation)
//    {
//        switch ($operation){
//            case '+':
//                self::$operation = new OperationAdd();
//                break;
//            case '-':
//                self::$operation = new OperationSub();
//                break;
//        }
//
//        return self::$operation;
//    }
//}

$counter = CounterFactory::createOperation(OperationSub::class);
echo $counter->getVal(1,8);