<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/10
 * Time: 3:47 PM
 */

interface Ichange
{
    public function changeThing($thing);
}

abstract class Animal
{
    protected $name;
    private $num;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setNum($num)
    {
        $this->num = $num;
    }

    public function getNum()
    {
        return $this->num;
    }

    public abstract function getShoutSound();

    public function shout()
    {
        $miao = '';

        for ($i=0; $i< $this->getNum(); $i++){
            $miao .= " ".$this->getShoutSound();
        }
        echo '我的名字叫'.$this->name.$miao.'<br>';
    }

}

class Cat extends Animal
{
    public function getShoutSound()
    {
        return "猫叫";
    }
}

class Dog extends Animal
{
    public function getShoutSound()
    {
        return "狗叫";
    }
}

class Milk extends Animal
{
    public function getShoutSound()
    {
        return "猴叫";
   }
}

class MachineCat extends Cat implements Ichange
{

    public function changeThing($thing)
    {
        $str = "我有万能口袋,我可以变出:$thing";
        echo $this->shout() .  $str."<br>";
    }

}

class Wukong extends  Milk implements Ichange
{
    public function changeThing($thing)
    {
        $str = "我有72变，可以变出:$thing";
        echo $this->shout() .  $str."<br>";
    }

}


class Form
{
    public function btn_click()
    {
        $cat = new Cat('1');
        $cat->setNum(3);
        $cat->shout();
    }

    public function btn_click2()
    {
        $dog = new Dog('小亮');
        $dog->setNum(3);
        $dog->shout();
    }

}


class Form2
{
    public function btn_click()
    {
        $cat = new Milk('1');
        $cat->setNum(3);
        $cat->shout();

        $mcat = new MachineCat('机器猫');
        $mcat->setNum(3);
        $mcat->changeThing('西瓜');

        $wukong = new Wukong('孙悟空');
        $wukong->setNum(3);
        $wukong->changeThing('胫骨帮');
//        $mcat->shout();


        $arr[0] = $wukong;
        $arr[1] = $mcat;

        for ($i=0; $i<2; $i++){
            $arr[$i]->changeThing('11');
        }
    }
}


$f = new Form();
$f->btn_click();
$f->btn_click2();

$f2 = new Form2();
$f2->btn_click();