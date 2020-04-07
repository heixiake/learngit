<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/2
 * Time: 2:19 PM
 */

namespace test;


class Singleton
{
    private static $_singleton;

    private function __construct()
    {
        echo "singleton is create";
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance()
    {
        if (!(self::$_singleton instanceof Singleton)){
            self::$_singleton = new Singleton();
        }

        return self::$_singleton;
    }
}

$s1 = Singleton::getInstance();
var_dump($s1);

$s2 = Singleton::getInstance();
var_dump($s2);
