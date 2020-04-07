<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/16
 * Time: 5:23 PM
 */

class Test
{
    public function run($data)
    {
//        echo $data;
        $data = json_decode($data, true);
        if (!is_array($data)){
            echo "server receive \$data format error.\n";
            return;
        }
        var_dump($data);
    }
}