<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 15/10/31
 * Time: 下午11:29
 */
namespace console\controllers;

use Faker\Factory;
use yii\console\Controller;
use yii\helpers\Console;
use yii\helpers\VarDumper;

class CliController extends Controller
{
    public function actionIndex($name="zly")
    {
//        var_export($_SERVER['a']);
//        echo php_sapi_name()."<br>";
//        echo \Yii::$app->request->scriptFile;
//        echo "my name is: ".$name.'\n';
//        var_dump(\Yii::$app->request->isConsoleRequest);
    }

    /**
     * 命令行说
     */
    public function actionSay($msg)
    {
        echo "you say: $msg";
    }

    /**
     * 生成email数据
     */
    public function actionInitemail()
    {
        fwrite(STDOUT,"请输入你要生成email数据的个数:");
        $num = trim(fgets(STDOUT));

        $fake = Factory::create('zh_CN');
        $redis = \Yii::$app->redis;

        for($i=1;$i<=$num;$i++){
            $email = $fake->email;
            echo $email.$fake->name.$fake->address."\n";
//            $redis->lpush("user",$email);
//            echo $email."已经添加:$i\n";
        }
    }

    /**
     * 删除email数据
     */
    public function actionDelemail()
    {
        $name = $this->ansiFormat('Alex', Console::FG_YELLOW);
        echo "Hello, my name is $name.";

        /*echo "删除email数据:\n";
        $redis = \Yii::$app->redis;
        $num = $redis->llen("user");
        for($i=1;$i<=$num;$i++){
            $email = $redis->lpop("user");
            echo $email."已经删除:$i\n";
        }*/
    }

}
