<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/24
 * Time: 5:48 PM
 */

$client = new swoole_client(SWOOLE_SOCK_TCP,SWOOLE_SOCK_SYNC);
//
$client->connect('127.0.0.1', 9501) || exit('connect error code:{$client->errCode}');

for ($i=0; $i<10; $i++)
{
    $client->send("zlyjava".$i."@126.com\r\n");
}

$client->close();