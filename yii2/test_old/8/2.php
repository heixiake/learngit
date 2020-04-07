<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/16
 * Time: 6:16 PM
 */


class LeiFeng
{
    public function Sweep()
    {
        echo "扫地<br>";
    }

    public function Wash()
    {
        echo "洗衣<br>";
    }

    public function BuyRice()
    {
        echo "买米<br>";
    }
}

class Undergraduate extends LeiFeng
{

}

class Volunteer extends LeiFeng
{

}


interface IFactorys
{
    public function CreateLeiFeng();
}

class UndergraduateFactory implements IFactorys
{
    public function CreateLeiFeng()
    {
        return new Undergraduate();
    }
}

class VolunteerFactory implements IFactorys
{
    public function CreateLeiFeng()
    {
        return new Volunteer();
    }
}


$xueleifeng = new Undergraduate();
$xueleifeng->Sweep();
$xueleifeng->Wash();
$xueleifeng->BuyRice();