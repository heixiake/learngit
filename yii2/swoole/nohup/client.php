<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/24
 * Time: 10:46 AM
 */

$client = new Swoole\Client(SWOOLE_SOCK_TCP, SWOOLE_SOCK_SYNC);

$client->connect('127.0.0.1', 9501) || exit("connect failed. Error: {$client->errCode}\n");

//向服务端发送数据
$client ->send("the data from client.\n");

$client->close();