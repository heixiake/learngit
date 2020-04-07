<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/3
 * Time: 5:12 PM
 */

namespace test;

class  Doctor
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function prescribe($data)
    {
        echo __CLASS__.":"."开个处方给你<br>";
        return "祖传秘方,药到必死";
    }
}

class SufferSystem
{
    static function getData($suffer)
    {
        $data = $suffer."资料";
        echo __CLASS__.":".$suffer."的资料是这些<br>";
        return $data;
    }
}

class Shop
{
    public static $medicine;
    static function setMedicine($medicine){
        self::$medicine = $medicine;
    }
    static function getMedicine(){
        echo __CLASS__.":".self::$medicine."<br>";
    }
}

class MedicineSystem
{
    static function register($prescribe){
        echo __CLASS__.":拿到处方：".$prescribe."------------通知药房发药了<br>";
        Shop::setMedicine("砒霜5千克");
    }
}


class DoctorSystem
{
   public static function getDoctor($name)
   {
        echo __CLASS__.":".$name."医生,挂你号<br>";
        return new Doctor($name);
   }
}

echo "没有挂号系统<br>";
$doct = DoctorSystem::getDoctor("顾夕衣");
$data = SufferSystem::getData("何在");
$prescribe = $doct->prescribe($data);

MedicineSystem::register($prescribe);
Shop::getMedicine();


