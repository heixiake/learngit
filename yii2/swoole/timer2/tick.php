<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/24
 * Time: 2:29 PM
 */
//
$i = 0;

swoole_timer_tick(1000, function($timeId, $parms) use (&$i){
    $i++;
    echo "hellos , {$parms} ---- {$i}\n";
    if ($i >= 5){
        swoole_time_clear($timeId);
    }
}, "world");

