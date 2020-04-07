<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/25
 * Time: 11:27 AM
 */

$http = new swoole_http_server("0.0.0.0", 9501);

$http->on("request", function($request, $response){
    var_dump($request);
    var_dump($request->get, $request->post);
    $response->header("Content-Type:", "text/html; charset=utf-8");
    $response->end("<h1>hello swoole.#".rand(1000,9999)."</h1>");
});

$http->start();