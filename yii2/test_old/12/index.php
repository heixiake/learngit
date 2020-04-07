<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/17
 * Time: 11:28 AM
 */

//外观模式

class Stock1
{
    public function sell()
    {
        echo '股票1买出<br>';
    }

    public function buy()
    {
        echo '股票1买入<br>';
    }
}

class Stock2
{
    public function sell()
    {
        echo '股票2买出<br>';
    }

    public function buy()
    {
        echo '股票2买入<br>';
    }
}

class NationalDept1
{
    public function sell()
    {
        echo '国债买出<br>';
    }

    public function buy()
    {
        echo '国债买入<br>';
    }
}

class Realty1
{
    public function sell()
    {
        echo '固定产买出<br>';
    }

    public function buy()
    {
        echo '固定产买入<br>';
    }
}

class Fund
{
    public $gu1;
    public $gu2;
    public $nd1;
    public $re1;

    public function __construct()
    {
        $this->gu1 = new Stock1();
        $this->gu2 = new Stock2();
        $this->nd1 = new NationalDept1();
        $this->re1 = new Realty1();
    }

    public function BuyFund()
    {
        $this->gu1->buy();
        $this->gu2->buy();
        $this->nd1->buy();
        $this->re1->buy();
    }

    public function SellFund()
    {
        $this->gu1->sell();
        $this->gu2->sell();
        $this->nd1->sell();
        $this->re1->sell();
    }
}


$jijing = new Fund();
$jijing->BuyFund();
$jijing->SellFund();

//$s1 = new Stock1();
//$s2 = new Stock2();
//$nd1 = new NationalDept1();
//$re1 = new Realty1();
//
//$s1->buy();
//$s2->buy();
//$nd1->buy();
//$re1->buy();
//
//$s1->sell();
//$s2->sell();
//$nd1->sell();
//$re1->sell();
