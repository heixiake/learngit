<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 01/08/2017
 * Time: 2:49 PM
 */

namespace frontend\controllers;


use common\models\Car;
use frontend\models\FamilyCar;
use frontend\models\SportCar;
use function Funct\true;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use yii\db\Connection;
use yii\db\Query;
use yii\helpers\Html;
use yii\helpers\VarDumper;
use yii\web\Controller;

class CarController extends Controller
{



    public function actionIndex()
    {
        echo Html::tag('h1', 'AllCars');
        $cars = Car::find()->all();
        foreach ($cars as $car) {
            echo get_class($car) . ' ' . $car->name . "<br>";
        }

        echo Html::tag('h1', 'FamilyCars');
        $familyCars = FamilyCar::find()->all();
        foreach ($familyCars as $familyCar) {
            echo get_class($familyCar) . ' ' . $familyCar->name . "<br>";
        }

        echo Html::tag('h1', 'SportCars');
        $sportCars = SportCar::find()->all();
        foreach ($sportCars as $sportCar) {
            echo get_class($sportCar) . ' ' . $sportCar->name . "<br>";
        }
    }


    public function actionDb()
    {
        $command = \Yii::$app->db->createCommand("SELECT * FROM car WHERE  `id>:id`", [':id' => '5']);
        $cars = $command->queryAll();
        VarDumper::dump($cars, 10, true);
    }

    public function actionQuery()
    {
        $query = new Query();

        $cars = $query->select('*')->from('car')
            ->all();
        $query2 = Query::create($query);
        VarDumper::dump($cars, 10, true);

        VarDumper::dump($query2, 10, true);
    }

    public function actionAr()
    {
        $cars = Car::find()->select('*')->all();
        VarDumper::dump($cars, 10, true);
    }

    public function actionSum()
    {
        $count = Car::find()->where('id>2')->count();
        echo $count;
        array_combine('a',[1,2]);
    }


    public function actionCache($hello)
    {
        $db = \Yii::$app->db;
        $cars = $db->cache(function (Connection $db) {
            return $db->createCommand("SELECT * FROM car")->queryAll();
        });

        VarDumper::dump($cars, 10, true);
        VarDumper::dump($db->queryCache);

        $data = time();
        echo "this time is 'hello'" . $dat;
        $this->actionSum(time());


    }


}