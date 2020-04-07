<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/17
 * Time: 12:30 PM
 */

abstract class PersonBuilder
{
    abstract public function BuildHead();
    abstract public function BuildBody();
    abstract public function BuildArmLeft();
    abstract public function BuildArmRight();
    abstract public function BuildLegLeft();
    abstract public function BuildLegRight();
}


class PersonThinBuild extends PersonBuilder
{
    public function BuildHead()
    {
        echo '小头 ';
    }

    public function BuildBody()
    {
        echo '身体 ';
    }

    public function BuildArmLeft()
    {
        echo '左臂 ';
    }

    public function BuildArmRight()
    {
        echo '右臂 ';
    }

    public function BuildLegLeft()
    {
        echo '左腿 ';
    }

    public function BuildLegRight()
    {
        echo '右腿 ';
    }
}

class PersonFatBuild extends PersonBuilder
{
    public function BuildHead()
    {
        echo '大头 ';
    }

    public function BuildBody()
    {
        echo ' 胖身体 ';
    }

    public function BuildArmLeft()
    {
        echo '左臂 ';
    }

    public function BuildArmRight()
    {
        echo '右臂 ';
    }

    public function BuildLegLeft()
    {
        echo '左腿 ';
    }

    public function BuildLegRight()
    {
        echo '右腿 ';
    }
}

class PersonDirector
{
    public $pb;

    public function __construct(PersonBuilder $personBuilder)
    {
        $this->pb = $personBuilder;
    }

    public function createPerson()
    {
        $this->pb->BuildHead();
        $this->pb->BuildBody();
        $this->pb->BuildArmLeft();
        $this->pb->BuildArmRight();
        $this->pb->BuildLegLeft();
        $this->pb->BuildLegRight();
    }
}

echo '苗条的:<br>';

$thinDirector = new PersonDirector(new PersonThinBuild());
$thinDirector->createPerson();

echo "<br>";

echo '肥胖的:<br>';
$fatDirector = new PersonDirector(new PersonFatBuild());
$fatDirector->createPerson();
