<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/24
 * Time: 9:27 AM
 */

//require_once "Test.php";
//
//class NoReload
//{
//    private $_serv;
//    private $_test;
//
//    public function __construct()
//    {
//        $this->_serv = new Swoole\Server('127.0.0.1', 9501);
//        $this->_serv->set([
//            'worker_num'=> 2,
////            'daemonize' => true,
////            'log_file' => __DIR__ . '/server.log',
//        ]);
//
//        $this->_serv->on('Receive', [$this,'onReceive']);
//        $this->_serv->on('WorkerStart', function($serv, $workerId){
//
//            if ($workerId == 0){
//                $i = 0;
//                $parms = "world";
//
//                $this->$serv->tick(1000, function($timeId) use($serv, &$i,$parms){
//                    $i++;
//                    echo "hello, {$parms}----{$i}\n";
//                    if ($i>5){
//                        $this->_serv->clearTimer($timeId);
//                    }
//                });
//            }
//        });
////        $this->_test = new Test();
//    }
//
//    public function onReceive($serv, $fd, $fromId, $data)
//    {
//        $this->_test->run($data);
//    }
//
////    public function onWorkerStart($serv, $workId)
////    {
////        require_once "Test.php";
////        $this->_test = new Test();
////    }
//    public function start()
//    {
//        $this->_serv->start();
//    }
//}
//
//$noReload = new NoReload();
//$noReload->start();


//$serv = new Swoole\Server('127.0.0.1', 9501);
//$serv->set([
//    'worker_num' => 2,
//]);
//$serv->on('WorkerStart', function ($serv, $workerId){
//    if ($workerId == 0) {
//        $i = 0;
//        $params = 'world';
//        $serv->tick(1000, function ($timeId) use ($serv, &$i, $params) {
//            $i ++;
//            echo "hello, {$params} --- {$i}\n";
//            if ($i >= 5) {
//                $serv->clearTimer($timeId);
//            }
//        });
//    }
//});
//
//$serv->start();

$serv = new swoole_server('127.0.0.1', 9501);
$serv->set([
    'worker_num' => 2,
]);
$serv->on('WorkerStart', function ($serv, $workerId){
    if ($workerId == 0) {
        $i = 0;
        $params = 'world';
        $serv->tick(1000, function ($timeId) use ($serv, &$i, $params) {
            $i ++;
            echo "hello, {$params} --- {$i}\n";
            if ($i >= 5) {
                $serv->clearTimer($timeId);
            }
        });
    }
});
$serv->on('Connect', function ($serv, $fd) {
});
$serv->on('Receive', function ($serv, $fd, $fromId, $data) {
    $serv->after(3000, function () {
        echo "only once.\n";
    });
});
$serv->on('Close', function ($serv, $fd) {
});
$serv->start();