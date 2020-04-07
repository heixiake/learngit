<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/25
 * Time: 3:39 PM
 */

$client = new swoole_client(SWOOLE_SOCK_TCP, SWOOLE_SOCK_ASYNC);

$client->on("connect", function($cli){
   $cli->send("hello world\n");
});

$client->on("receive", function($cli, $data){
   echo "on receive: $data \n";
});

$client->on("error", function($cli){
    echo "connection failed\n";
});

$client->on("close", function($cli){
    echo "connection close\n";
});

$client->connect("127.0.0.1", 9501, 0.5);