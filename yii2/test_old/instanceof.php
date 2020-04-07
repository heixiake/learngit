<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/31
 * Time: 5:19 PM
 */

class Foo
{
    public $foobar = "foo";

    public function test()
    {
        echo $this->foobar. "\n";
    }
}

class Bar extends Foo
{
    public $foobar = "bar";
}

$a = new Foo();
$b = new Bar();

echo "use test method:\n";
$a->test();
$b->test();

echo "instance of Foo:\n";
var_dump($a instanceof Foo);
var_dump($b instanceof Foo);
