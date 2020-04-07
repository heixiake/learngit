<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/25
 * Time: 2:30 PM
 */

$i =0;
swoole_timer_tick(2000, function($timeId) use (&$i){
    echo "this is swoole time tick $i \n";
    $i++;
   if ($i >=5){
       swoole_timer_clear($timeId);
   }
});


swoole_timer_after(3000, function(){
    echo "after 3000\n";
});

