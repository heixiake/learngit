<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/25
 * Time: 3:13 PM
 */
 $client = new swoole_client(SWOOLE_SOCK_TCP,SWOOLE_SOCK_SYNC);
//
$client->connect('127.0.0.1', 9501) || exit('connect error code:{$client->errCode}');

$client->send("hello world.");

$data = $client->recv();
if (!$data){
    die('recv failed');
}

echo $data;

$client->close();