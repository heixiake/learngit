<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/16
 * Time: 3:52 PM
 */


interface  GiveGif
{
    public function giveDools();
    public function giveFlowers();
}
//
//
//class Pursuit
//{
//    public $girl;
//    public function __construct(SchoolGirl $girl)
//    {
//        $this->girl = $girl;
//    }
//
//
//    public function giveDools()
//    {
//        echo $this->girl->name. ",送你洋娃娃!<br>";
//    }
//
//    public function giveFlowers()
//    {
//        echo $this->girl->name. ",送你花花!<br>";
//    }
//
//}
//
//
//class Proxy
//{
//    public $girl;
//
//    public function __construct($girl)
//    {
//        $this->girl = $girl;
//    }
//
//    public function giveDools()
//    {
//        echo $this->girl->name. ",送你洋娃娃!<br>";
//    }
//
//    public function giveFlowers()
//    {
//        echo $this->girl->name. ",送你花花!<br>";
//    }
//}


class Pursuit implements GiveGif
{
    public $girl;

    public function __construct($girl)
    {
        $this->girl = $girl;
    }

    public function giveDools()
    {
        echo $this->girl->name. ",送你洋娃娃!<br>";
    }

    public function giveFlowers()
    {
        echo $this->girl->name. ",送你花花!<br>";
    }
}

class Proxy implements GiveGif
{

    public $ps;

    public function __construct($girl)
    {
        $this->ps = new Pursuit($girl);
    }


    public function giveDools()
    {
        // TODO: Implement giveDools() method.
        $this->ps->giveDools();
    }

    public function giveFlowers()
    {
        // TODO: Implement giveFlowers() method.
        $this->ps->giveFlowers();
    }

}


class SchoolGirl
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}


$girl = new SchoolGirl('李娇娇');
$daili = new Proxy($girl);


$daili->giveDools();
$daili->giveFlowers();