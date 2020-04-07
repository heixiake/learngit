<?php
namespace api\controllers;

use common\models\Article;
use function Funct\true;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\VarDumper;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
   /* public function behaviors()
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
        ];
    }*/

    /**
     * @inheritdoc
     */
    /*public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }*/

    public function actionIndex()
    {
        return $this->render('index');
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
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionTest()
    {
        $article = new Article();
        $article->name = "Valentine\\'s Day\\'s coming? Aw crap! I forgot to get a girlfriend again!";
        $article->description = "Bender is angry at Fry for dating a robot. Stay away from our women.

You\'ve got metal fever, boy. Metal fever";
        $article->on(Article::EVENT_AFTER_INSERT, function ($event){
            echo "Email is send<br>";
//            VarDumper::dump($event,10,true);
        });

        if (!$article->save())
        {
            VarDumper::dump($article->getErrors());
        }
    }

    public function actionTestNew()
    {
        $article = new Article();
        $article->name = 'aaa';
        $article->description = 'bbb';

        $article->on(Article::EVENT_OUR_CUSTOME_EVENT, function ($event){
           echo "test our custome event<br>";
//           VarDumper::dump($event, 10, true);
        });

        if (!$article->save())
        {
            VarDumper::dump($article->getErrors(), 10, true);
        }
    }
}
