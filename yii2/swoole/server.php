<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/15
 * Time: 4:01 PM
 */

$serv = new swoole_server('127.0.0.1',9501);

$serv->set([
    'worker_num'=>2,
    'task_worker_num'=>2
]);

$serv->on('Connect', function($serv, $fd){
    echo "new click connected". PHP_EOL;
});

$serv->on('Receive', function ($serv,$fd, $fromId, $data){
//    $serv->send($fd, "Server ".$data);
//    echo "worker received data: {$data}" . PHP_EOL;
    echo "收到任务数据".PHP_EOL;
    $serv->task($data);
    $serv->send($fd, "This is message from server".PHP_EOL);
    echo "worker continue run." . PHP_EOL;
});


$serv->on('Task', function ($serv, $taskId, $fromId, $data){
    echo "task start. -- from worker id:{$fromId}.".PHP_EOL;
//    echo "111. -- from worker id:{$fromId}.".PHP_EOL;
//    $emails = json_decode($data);
//    for ($i=0; $i<count($emails); $i++){
        sleep(1);
//        echo "task running. ----{$i}---$data".PHP_EOL;
        echo "邮箱{$data}发送中......".PHP_EOL;
//    }
    return "{$data}".PHP_EOL;
});

$serv->on('Finish', function ($serv, $taskId, $data){
    echo "finished received data {$data}".PHP_EOL;
});

$serv->on('Close', function ($serv, $fd){
    echo "Client close." . PHP_EOL;
});


$serv->start();


//$serv = new swoole_server('127.0.0.1', 9501);
//$serv->set([
//    'worker_num' => 2,
//]);
//// 有新的客户端连接时，worker进程内会触发该回调
//$serv->on('Connect', function ($serv, $fd) {
//    echo "new client connected." . PHP_EOL;
//});
//// server接收到客户端的数据后，worker进程内触发该回调
//$serv->on('Receive', function ($serv, $fd, $fromId, $data) {
//    // 收到数据后发送给客户端
//    $serv->send($fd, 'Server '. $data);
//});
//// 客户端断开连接或者server主动关闭连接时 worker进程内调用
//$serv->on('Close', function ($serv, $fd) {
//    echo "Client close." . PHP_EOL;
//});
//// 启动server
//$serv->start();