<?php
namespace console\controllers;

use GearmanClient;
use GearmanWorker;
use Yii;
use yii\console\Controller;

/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 15/11/6
 * Time: 下午3:36
 */

class GearmanController extends Controller
{

    public function actionClient()
    {
        /*$client =  new GearmanClient();
        $client->addServer();

        $redis = Yii::$app->redis;
        $num = $redis->llen("user");

        for($i=1;$i<=$num;$i++){
            $email = $redis->lpop("user");
            $client->doNormal('sendmail',$email);
        }*/

        $client= new GearmanClient();
        $client->addServer();
        print $client->doNormal("title", "Linvo");
        print "/n";
    }


    /**
     *
     */
    public function actionWork()
    {
        /*$worker = new GearmanWorker();
        $worker->addServer();

        $worker->addFunction('sendmail',function(GearmanJob $job){
            $email = $job->workload();
            echo "send ".$email."\n";
            sleep(1);
        });

        while(true){
            $worker->work();
        }*/

        $worker= new GearmanWorker();
        $worker->addServer();
        $worker->addFunction("title", "title_function");
        while ($worker->work());

        function title_function($job)
        {
            $str = $job->workload();
            return strlen($str);
        }
    }
}