<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/17
 * Time: 9:56 AM
 */

class Company
{
    public $name;

    public function setName($name)
    {
        $this->name = $name;
    }
}
class Resume
{
    public $name;
    public $age;
    public $sex;

    public $timeArea;
    public $company;

    public function __construct($name)
    {
        $this->name = $name;
        $this->company = new Company();
    }

    public function setPersonInfo($sex, $age)
    {
        $this->sex = $sex;
        $this->age = $age;
    }

    public function setCompany($timearea, $company)
    {
        $this->timeArea = $timearea;
        $this->company->setName($company);
    }

    public function show()
    {
        echo $this->name.",性别:".$this->sex.",年龄:".$this->age.";工作".$this->timeArea."年在".$this->company->name."公司<br>";
    }

    public function __clone()
    {
        $this->company = clone $this->company;
    }
}

$p1 = new Resume('张三');
$p1->setPersonInfo(22,'女');
$p1->setCompany('2002-2003','北京爱思美公司');

$p2 = clone  $p1;
$p2->setCompany('2003-2005','xxxx公司1');

$p3 = clone $p1;
$p3->setCompany('2005-2006','xxxx公司2');



$p1->show();
$p2->show();
$p3->show();
