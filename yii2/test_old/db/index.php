<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/6/2
 * Time: 11:15 AM
 */

$db['server'] = 'localhost';
$db['username'] = 'root';
$db['pwd']  = 'root';
$db['dbname'] = 'yzt';


$mysql = new mysqli($db['server'], $db['username'], $db['pwd'], $db['dbname']);
var_dump($mysql);