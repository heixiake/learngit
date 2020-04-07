<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/17
 * Time: 4:08 PM
 */

class TcpBufferServer
{
    private $_serv;

    public function __construct()
    {
        $this->_serv = new Swoole\Server("127.0.0.1", 9501);
        $this->_serv->set([
            'worker_num' => 3,
            'open_eof_check' => true, //打开EOF检测
            'package_eof' => "\r\n", //设置EOF
        ]);
        $this->_serv->on('Receive',[$this,'onReceive']);
    }

    public function onReceive($serv, $fd, $fromId, $data)
    {
//        echo "Server received data:{$data}".PHP_EOL;
        $datas = explode("\r\n", $data);
        foreach ($datas as $data)
        {
            if(!$data)
                continue;

            echo "Server received data: {$data}" . PHP_EOL;
        }
    }


    public function start()
    {
        $this->_serv->start();
    }
}

$reload = new TcpBufferServer();
$reload->start();