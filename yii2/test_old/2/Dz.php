<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/8
 * Time: 5:39 PM
 */

//class Dz
//{
//
//    public function getResult($num, $price, $discount=1)
//    {
//        return $num * $price * $discount;
//    }
//}
//
//$dz = new Dz();
//echo $dz->getResult(10, 90,0.1);

abstract class CashSuper
{
    public abstract function acceptCash($money);
}

class CashNormal extends CashSuper
{
    public function acceptCash($money)
    {
        // TODO: Implement acceptCash() method.
        return $money;
    }
}

class CashRebate extends CashSuper
{
    public $moneyRebate = 1;

    public function __construct($moneyrebate)
    {
        $this->moneyRebate = $moneyrebate;
    }


    public function acceptCash($money)
    {
        // TODO: Implement acceptCash() method.
        return $money * $this->moneyRebate;
    }
}

class CashRetrun extends CashSuper
{
    public $moneyCondition;
    public $moneyResult;

    public function __construct($condition, $result)
    {
        $this->moneyCondition = $condition;
        $this->moneyResult = $result;
    }

    public function acceptCash($money)
    {
        if ($money >= $this->moneyCondition){
            $result = $money - ($money/$this->moneyCondition) * $this->moneyResult;
        }
    }
}


class CashFactory
{
    public $cs = null;

    public static function createCash($type)
    {
        switch ($type){
            case '正常':
                $cs = new CashNormal();
                break;
            case '满300减100':
                $cs = new CashRebate(300, 100);
                break;
            case '打8折':
                $cs = new CashRebate(0.8);
                break;
        }

        return $cs;
    }
}


$cash = CashFactory::createCash('正常');
echo $cash->acceptCash(100);