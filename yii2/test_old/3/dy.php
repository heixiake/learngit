<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/10
 * Time: 11:47 AM
 */

class cb
{
    public function __construct()
    {
        echo '这是一个翅膀';
    }

}

class dy
{
    public $cb;
    public function __construct()
    {
        echo '这是一个大雁';
        $this->cb = new cb();

    }

}

class yq
{
    public $dy;

    public function __construct($dy)
    {

        echo '这是一个雁群';
        $this->dy = $dy;
    }
}

$dy = new dy();
$yq = new yq($dy);