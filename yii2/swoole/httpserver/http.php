<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/24
 * Time: 6:26 PM
 */

$http = new swoole_http_server("127.0.0.1", 9501);

$http->on('request', function ($request, $response) {
    echo $request->header['x-real-ip'];
    $response->end("<h1>Hello Swoole. #".rand(1000, 9999)."</h1>\n");
});
$http->start();