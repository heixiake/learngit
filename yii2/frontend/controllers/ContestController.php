<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/06/2017
 * Time: 9:19 PM
 */

namespace frontend\controllers;


use common\models\Contest;
use common\models\ContestPrizeAssn;
use common\models\Prize;
use function Funct\false;
use yii\base\Model;
use yii\helpers\VarDumper;
use yii\web\Controller;

class ContestController extends Controller
{
    public function actionCreate()
    {

        $firstPrize = new Prize();
        $firstPrize->name = 'Iphone 6s';
        $firstPrize->amount=4;


        $secondPrize = new Prize();
        $secondPrize->name = 'Sony Playstation 4';
        $secondPrize->amount=2;

        $contest = new Contest();
        $contestName = "Happ New Year";
        $contest->name = $contestName;

        $prizes = [$firstPrize, $secondPrize];

        if ($contest->validate() && Model::validateMultiple($prizes)) {
            $contest->save(false);
            foreach ($prizes as $prize) {
                $prize->save(false);
                $contestPrizeAssn = new ContestPrizeAssn();
                $contestPrizeAssn->prize_id = $prize->id;
                $contestPrizeAssn->contest_id = $contest->id;
                $contestPrizeAssn->save(false);
            }

            return $this->renderContent('All prize have been successfully saved!');
        }else {
            return $this->renderContent(VarDumper::dumpAsString($contest->getErrors()));
        }
    }


    public function actionUpdate()
    {
        $prizes = Prize::find()->all();

        if (Model::loadMultiple($prizes,\Yii::$app->request->post()) && Model::validateMultiple($prizes)){
            foreach ($prizes as $prize){
                $prize->save();
            }

            return $this->renderContent('All prizes have been successfully saved!');
        }
        return $this->render('update',['prizes'=>$prizes]);
    }

}