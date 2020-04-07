<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/25
 * Time: 11:21 AM
 */

$serv = new swoole_server("127.0.0.1", 9501, SWOOLE_PROCESS, SWOOLE_SOCK_UDP);

$serv ->on("Packet", function($serv, $data, $clientInfo){
    $serv->sendto($clientInfo['address'], $clientInfo['port'], "Server ".$data);
    var_dump($clientInfo);
});

$serv->start();