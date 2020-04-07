<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/06/2017
 * Time: 11:06 PM
 */

namespace frontend\controllers;


use common\models\Order;
use common\models\Ouser;
use yii\web\Controller;

class TestModelController extends Controller
{

    public function actionIndex()
    {
        echo 'ddd';
        return $this->render('index');
    }

    public function actionOrder()
    {
        $user = new Ouser();
        $order = new Order();

        if ($user->load(\Yii::$app->request->post()) && $order->load(\Yii::$app->request->post())){
            if ($user->validate() && $order->validate()){
                $user->save(false);

                $order->user_id = $user->id;
                $order->save(false);
                $this->redirect(['test-model/result','id'=>$order->id]);
            }
        }

        return $this->render('order',[
            'user'=>$user,
            'order'=>$order
        ]);
    }

    public function actionResult($id)
    {
        $order = Order::find($id)->with('product','user')->one();

        return $this->renderContent(
            'Product:' . $order->product->title."<br>".
            'price:'.$order->product->price.'<br>'.
            'Customer:'.$order->user->first_name.' '.$order->user->last_name.'<br>'.
            'Address:'.$order->address
        );
    }
}