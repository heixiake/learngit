<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/25
 * Time: 10:57 AM
 */

$serv = new swoole_server("127.0.0.1", 9501);

$serv->on("connect", function($serv, $fd){
    echo "Client:connect\n";
});

$serv->on("receive", function($serv, $fd, $from_id, $data){
    $serv->send($fd, "server: ".$data."--from_id:".$from_id."\n");
});

$serv->on("close", function($serv, $fd){
   echo "Client:close\n";
});


$serv->start();