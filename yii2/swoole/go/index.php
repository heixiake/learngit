<?php
//go(function(){
//    \Swoole\Coroutine::sleep(1);
//    echo "hello go1 \n";
//});
//
//echo "hello main\n";
//
//go(function(){
//    \Swoole\Coroutine::sleep(1);
//    echo "hello go2\n";
//});
//
$n = 4;
//go(function() use($n){
//    for($i = 0; $i < $n; $i++)
//    {
//        sleep(1);
//        echo microtime(true) . ": hello  $i \n";
//    }
//});
for($i = 0; $i < $n; $i++)
{
    go(function() use ($i){
        Co::sleep(1);
        echo microtime(true) . ": hello  $i \n";
    });
}

echo "hello main\n";

?>
