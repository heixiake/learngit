<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/24
 * Time: 9:27 AM
 */

require_once "Test.php";

class NoReload
{
    private $_serv;
    private $_test;

    public function __construct()
    {
        $this->_serv = new Swoole\Server('127.0.0.1', 9501);
        $this->_serv->set([
            'worker_num'=> 2,
//            'daemonize' => true,
//            'log_file' => __DIR__ . '/server.log',
        ]);

        $this->_serv->on('Receive', [$this,'onReceive']);
//        $this->_serv->on('WorkerStart', [$this, 'onWorkerStart']);
        $this->_test = new Test();
    }

    public function onReceive($serv, $fd, $fromId, $data)
    {
        $this->_test->run($data);
    }

//    public function onWorkerStart($serv, $workId)
//    {
//        require_once "Test.php";
//        $this->_test = new Test();
//    }
    public function start()
    {
        $this->_serv->start();
    }
}

$noReload = new NoReload();
$noReload->start();