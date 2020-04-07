<?php


interface IFactory
{
    public function CreateOperation();
}

class AddFactory implements IFactory
{
    public function CreateOperation()
    {
        // TODO: Implement CreateOperation() method.
        return new operationAdd();
    }
}

class SubFactory implements IFactory
{
    public function CreateOperation()
    {
        return new operationSub();
    }
}

class MulFactory implements IFactory
{
    public function CreateOperation()
    {
        return new operationMul();
    }
}

class DivFactory implements IFactory
{
    public function CreateOperation()
    {
        return new operationDiv();
    }
}




class Operation
{
    private $numberA;
    private $numberB;

    public function __get($name)
    {
// TODO: Implement __get() method.
        return $this->$name;
    }

    public function __set($name, $value)
    {
// TODO: Implement __set() method.
        $this->$name = $value;
    }

    public function getResult()
    {

    }
}

class operationAdd extends Operation
{
    public function getResult()
    {
        return $this->numberA + $this->numberB;
    }

}

class operationMul extends Operation
{
    public function getResult()
    {
        return $this->numberA * $this->numberB;
    }
}

class operationSub extends Operation
{
    public function getResult()
    {
        return $this->numberA - $this->numberB;
    }
}

class operationDiv extends Operation
{
    public function getResult()
    {
        return $this->numberA / $this->numberB;
    }
}
//
//class OperationFactory
//{
//    public static function createOperation($operation)
//    {
//        switch ($operation) {
//            case '+':
//                $oper = new operationAdd();
//                return $oper;
//            case '-':
//                $oper = new operationSub();
//                return $oper;
//            case '*':
//                $oper = new operationMul();
//                return $oper;
//            case '/':
//                $oper = new operationDiv();
//                return $oper;
//        }
//
//        return $oper;
//    }
//}
//
//
//$operation = OperationFactory::createOperation('+');
//$operation->numberA = 110;
//$operation->numberB = 2;
//echo $operation->getResult();

$operationFactory = new AddFactory();
$operation = $operationFactory->CreateOperation();

$operation->numberA=9;
$operation->numberB = 10;

echo $operation->getResult();


