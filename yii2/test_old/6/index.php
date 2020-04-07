<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/12
 * Time: 4:55 PM
 */

abstract class Finery
{
    abstract function show();
}

class Tshirt extends Finery
{
    function show()
    {
        echo '穿T恤 ';
    }
}

class BigTrouser extends Finery
{
    public function show()
    {
        echo '垮裤 ';
    }
}

class Sneakers extends Finery
{
    function show()
    {
        echo '破球鞋 ';
    }
}

class Suit extends Finery
{
    function show()
    {
        echo '西装  ';
    }
}

class Tie extends Finery
{
    function show()
    {
        echo '领带 ';
    }
}

class LeatherShoues extends Finery
{
    function show()
    {
        echo '皮鞋 ';
    }
}



class Person
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo "装扮的 $this->name <br>";
    }
}


abstract class Component
{
    public abstract function operation();
}



class ConcreteComponent extends Component
{
    public function operation()
    {
        echo '具体对象的操作<br>';
    }
}



abstract class Decorator extends Component
{
    public $component;

    public function setComponent(Component $component)
    {
        $this->component = $component;
    }

    public function operation()
    {
        if ($this->component != null){
            $this->component->operation();
        }
    }
}



class ConcreteDecoratorA extends Decorator
{
    public $addedstate;

    public function operation()
    {
        parent::operation();
        $this->addedstate = "New State";
        echo "具体装饰对象A的操作<br>";
    }
}

class ConcreteDecoratorB extends Decorator
{
    public function operation()
    {
        parent::operation();
        $this->AddedBehavior();
        echo '具体装饰对象B的操作<br>';
    }

    public function AddedBehavior()
    {
        
    }
}

$c = new ConcreteComponent();
$d1 = new ConcreteDecoratorA();
$d2 = new ConcreteDecoratorB();

$d1->setComponent($c);
$d2->setComponent($d1);
$d2->operation();


//$p = new Person('张三');
//$dtx = new Tshirt();
//$kk = new BigTrouser();
//$pqx = new Sneakers();
//echo "第一种:<br>";
//$dtx->show();
//$kk->show();
//$pqx->show();
//$p->show();
//
//
//echo "第二种：<br>";
//$xz = new Suit();
//$ld = new Tie();
//$px = new LeatherShoues();
//$xz->show();
//$ld->show();
//$px->show();
//$p->show();