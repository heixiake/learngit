<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/15
 * Time: 4:20 PM
 */
//$emails = [
//    'zly1@126.com',
//    'zly2@126.com',
//    'zly3@126.com',
//    'zly4@126.com',
//    'zly5@126.com',
//    'zly6@126.com',
//    'zly7@126.com',
//    'zly8@126.com',
//    'zly9@126.com',
//    'zly10@126.com',
//];

//for ($i=0; $i<1000; $i++){
//    $emails[]="zly".$i."@126.com";
//}
//var_dump($emails);
$client = new swoole_client(SWOOLE_SOCK_TCP,SWOOLE_SOCK_SYNC);
//
$client->connect('127.0.0.1', 9501) || exit('connect error code:{$client->errCode}');

$client->send("Just a test.\n");

$client->close();

////$client->send('hello server');
////$emails = json_encode($emails);
////$client->send($emails);
//for ($i=0; $i<count($emails); $i++){
//    $client->send($emails[$i]);
//}
//
//$response = $client->recv();
//
//echo $response.PHP_EOL;
//$client->close();