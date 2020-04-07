<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 27/06/2017
 * Time: 12:23 AM
 */

namespace frontend\controllers;


use common\models\Test;
use common\models\Test1;
use common\models\Test2;
use yii\helpers\Html;
use yii\web\Controller;

class CssController extends Controller
{

//    public function actionIndex()
//    {
//        $username = \Yii::$app->request->get('username','nobody');
//
//        return $this->renderContent(Html::tag('h1',Html::encode('Hello'.$username)));
//    }

    public function actionIndex()
    {
        echo "excel index";
    }

    /**
     * 导出
     */

    function sctonum($num, $double = 0){
        if(false !== stripos($num, "e")){
            $a = explode("e",strtolower($num));
            return bcmul($a[0], bcpow(10, $a[1], $double), $double);
        }
    }

    /**
     * 导入
     */
    public function actionImport()
    {
        ini_set("precision",25);
        $file = dirname(__FILE__).'/1.csv';
        $objreader = \PHPExcel_IOFactory::createReader('csv');
        $objexcel= $objreader->load($file);

        $sheet = $objexcel->getActiveSheet();//->getStyle('A9')->getNumberFormat()->setFormatCode('0');
        $highestRow = $sheet->getHighestRow();           //取得总行数
        $highestColumn = $sheet->getHighestColumn();

        for ($j=0;$j<=3;$j++)
        {
            for ($k='A';$k<=$highestColumn;$k++)
            {
                $str=$objexcel->getActiveSheet()->getCell("$k$j")->getValue()."----<br>";
                echo $k.$str;
                unset($str);
            }
//            echo $str;
        }



        die();
//        echo dirname(__FILE__);
//        $data = \moonland\phpexcel\Excel::import();
        $data = \moonland\phpexcel\Excel::import(dirname(__FILE__)."/1.csv", $config);
//        echo $count = count($data);
        var_dump($data[0]);
        var_dump(number_format(($data[0]['企业内部编号']),0,'',''));
        echo '2017103070504808850';
        die();
        $test1 = new Test1();
        for ($i=0; $i<=count($data); $i++)
        {
            $test1 = new Test1();
            $test1->qiye = $this->sctonum($data[$i]['企业内部编号']);
            $test1->yudan = $data[$i]['物流运单编号'];
            echo $test1->qiye."<br>";
            if (!$test1->save()){
                var_dump($test1->errors);
            }
            unset($test1);

        }

//        var_dump($data[0]);
//        var_dump($data[1]);
    }


    public function actionImport2()
    {
        $data = \moonland\phpexcel\Excel::import(dirname(__FILE__)."/2.csv", $config);

        var_dump($data[0]);
//        die();
        for ($i=0; $i<=count($data); $i++)
        {
            $test2 = new Test2();
            $test2->zt = $data[$i]['状态'];
            $test2->jiaqian = $data[$i]['加签状态'];
            $test2->qiye = $this->sctonum($data[$i]['企业内部编号']);
            $test2->qingdan = (int)($data[$i]['清单编号']);
            $test2->yudan='1';
            echo $test2->qiye."<br>";
            if (!$test2->save()){
                var_dump($test2->errors);
            }
            unset($test2);
        }
    }


    public function actionXdfind()
    {
        $data = Test2::find()->all();
        echo count($data);
        for ($i=0; $i<=count($data);$i++)
        {
            $result = Test1::find()->where('qiye = '.$data[$i]['qiye'])->one();
            var_dump($result);
            if ($result){
                echo '有<br>';
                $test2 = Test2::find()->where('qiye='.$result['qiye'])->one();
                $test2->yudan = $result['yudan'];
                $s = $test2->save();
                if (!$s){
                    var_dump($test2->errors);
                }
            }else{
                echo '无记录<br>';
            }
        }
    }

    public function actionExport()
    {
        \moonland\phpexcel\Excel::export([
            'models' => Test2::find()->all(),
            'columns' => [
//                'author.name:text:Author Name',
                'zt:text',
                'jiaqian:text',
                'qiye:text',
                'qingdan:text',
                'yudan:text'
//                [
//                    'attribute' => 'content',
//                    'header' => 'Content Post',
//                    'format' => 'text',
//                    'value' => function($model) {
//                        return ExampleClass::removeText('example', $model->content);
//                    },
//                ],
//                'like_it:text:Reader like this content',
//                'created_at:datetime',
//                [
//                    'attribute' => 'updated_at',
//                    'format' => 'date',
//                ],
            ],
//            'headers' => [
//                'created_at' => 'Date Created Content',
//            ],
        ]);

    }
}