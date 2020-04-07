<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/25
 * Time: 2:46 PM
 */

$serv = new swoole_server("127.0.0.1", 9501);

$serv->set([
    'task_worker_num'=>4
]);

$serv->on("receive", function($serv, $fd, $fromId, $data){
   //投递异步任务
    $task_id = $serv->task($data);
    echo "Dispath AsyncTask: id=$task_id\n";
});

//处理异步任务
$serv->on("task", function($serv, $task_id, $fromid, $data){
    echo "New AsyncTask[id=$task_id]".PHP_EOL;
    //返回任务执行的结果
    $serv->finish("$data -> ok");

});

//处理异步任务的结果
$serv->on("finish", function($serv, $task_id, $data){
    echo "AsyncTask[$task_id] Finish: $data".PHP_EOL;
});


$serv->start();