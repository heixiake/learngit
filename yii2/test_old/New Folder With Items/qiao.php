<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/3
 * Time: 6:05 PM
 */

namespace test;


abstract class Audio
{
    abstract function output();
}

abstract class MiPhone
{
    protected $_auto;
    abstract function output();
    public function __construct(Audio $audio)
    {
        $this->_auto = $audio;
    }
}


class Mix extends MiPhone
{
    function output()
    {
        $this->_auto->output();
    }
}

class Note extends MiPhone
{

}