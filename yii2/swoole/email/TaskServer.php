<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/17
 * Time: 4:47 PM
 */

class TaskServer
{
    private $_serv;
    private $_run;

    public function __construct()
    {
        $this->_serv = new Swoole\Server("127.0.0.1", 9501);
        $this->_serv->set([
           'worker_num'=>2,
            'daemonize'=>false,
            'log_file' => __DIR__ . '/server.log',
            'task_worker_num' => 2,
            'max_request' => 5000,
            'task_max_request' => 5000,
            'open_eof_check' => true, //打开EOF检测
            'package_eof' => "\r\n", //设置EOF
            'open_eof_split' => true, // 自动分包
        ]);

        $this->_serv->on('Connect',[$this,'onConnect']);
        $this->_serv->on('Receive',[$this,'onReceive']);
        $this->_serv->on('WorkerStart', [$this, 'onWorkerStart']);
        $this->_serv->on('Task', [$this, 'onTask']);
        $this->_serv->on('Finish', [$this, 'onFinish']);
        $this->_serv->on('Close', [$this, 'onClose']);
    }

    public function onConnect($serv, $fd, $fromId)
    {

    }

    public function onReceive($serv, $fd, $fromId, $data)
    {
        require_once __DIR__ . "/TaskRun.php";
        $this->_run = new TaskRun;
    }


}