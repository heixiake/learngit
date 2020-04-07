<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\Html;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\web\ServerErrorHttpException;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $layout = null;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
//            'error'=>[
//                'class'=>'yii\web\ErrorAction'
//            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
//        return $this->renderContent(Html::tag('h2','index action'));

//        var_dump(Yii::$app->user->username);
        if (Yii::$app->user->isGuest){
            return $this->renderContent(Html::tag('h2','guest'));
        }else{
//            echo Yii::$app->user->
            return $this->renderContent(Html::tag('h2','user'));
        }
//        echo 'index';
//        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
//        echo "logout";
        Yii::$app->user->logout();
//
        return $this->goHome();
    }

    public function actionFail()
    {
        throw new ServerErrorHttpException('Error message example');
    }


    public function actionPage($alias)
    {
        return $this->renderContent(Html::tag("h2","Page is ". Html::encode($alias)));
    }

    public function actionError()
    {

    }
}
