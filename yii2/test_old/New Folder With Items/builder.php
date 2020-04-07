<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/2
 * Time: 5:01 PM
 */

namespace test;


class Person
{
    public $age;
    public $speed;
    public $knowledge;
}

abstract class Builder
{
    public $_person;

    abstract function setAge();
    abstract function setSpeed();
    abstract function setKnowledge();

    public function __construct(Person $person)
    {
        $this->_person = $person;
    }

    public function getPerson()
    {
        return $this->_person;
    }
}

class OldBuilder extends Builder
{

    function setAge()
    {
        $this->_person->age = 100;
    }

    function setSpeed()
    {
        $this->_person->speed = 'low';
    }

    function setKnowledge()
    {
        $this->_person->knowledge = 'more';
    }
}

class Director
{
    private $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function build()
    {
        $this->builder->setAge();
        $this->builder->setSpeed();
        $this->builder->setKnowledge();
    }
}

$oldBuilder =  new OldBuilder(new Person());
$director = new Director($oldBuilder);
$director->build();

$old = $oldBuilder->getPerson();
echo $old->age;