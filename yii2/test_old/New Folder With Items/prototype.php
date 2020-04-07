<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/2
 * Time: 7:27 PM
 */

namespace test;


abstract class Property
{
    abstract function __clone();
}

class Map extends Property
{
    public $width;
    public $height;
    public $sea;

    public function setAttribute(array $arr)
    {
        foreach ($arr as $key => $value) {
            $this->$key = $value;
        }
    }

    public function __clone()
    {
        $this->sea = clone $this->sea;
    }
}

class Sea
{

}

$map_property = new Map();
$arr = ['width'=>40, 'height'=>60, 'sea'=>new Sea()];
$map_property->setAttribute($arr);

$new_map = clone $map_property;

var_dump($map_property->sea);
var_dump($new_map->sea);
var_dump(clone  $new_map);