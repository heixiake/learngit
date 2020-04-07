<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/17
 * Time: 4:12 PM
 */

$client = new swoole_client(SWOOLE_SOCK_TCP, SWOOLE_SOCK_SYNC);

$client->connect('127.0.0.1', 9501) || exit("connect failed. Error: {$client->errCode}\n");
for ($i=0; $i<10000; $i++){
    $emails[] = "zly".$i."@zlyjava";
}
for ($i=0; $i<10000; $i++){
    $client->send($emails[$i]."\r\n");
}

$client->close();