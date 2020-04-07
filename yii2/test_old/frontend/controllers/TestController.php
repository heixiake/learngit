<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 11/06/2017
 * Time: 3:58 PM
 */

namespace frontend\controllers;


use common\models\Build;
use common\models\Car;
use common\models\City;
use common\models\Community;
use common\models\Province;
use common\models\Test;
use common\models\User;
use function foo\func;
use frontend\components\BaseController;
use frontend\models\EmailForm;
use frontend\models\FamilyCar;
use frontend\models\SportCar;
use function Funct\false;
use function Funct\true;
use yii\caching\DbDependency;
use yii\caching\ExpressionDependency;
use yii\captcha\CaptchaAction;
use yii\db\ActiveRecord;
use yii\db\Connection;
use yii\db\Query;
use yii\filters\AccessControl;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\VarDumper;
use yii\imagine\Image;
use yii\web\Controller;
use yii\web\Cookie;
use yii\web\Response;
use Yii;

class TestController extends Controller
{
//    public $layout = false;
//    public function behaviors()
//    {
//        return [
//            'access'=> [
//                'class'=> AccessControl::className(),
//                'rules'=>[
//                    [
////                        'allow'=>true,
////                        'roles'=>'@',
////                        'actions'=>['user']
//                    ],
//                    [
////                        'allow'=>true,
////                        'roles'=>['?'],
////                        'actions'=>['index','access','error']
//                    ],
//                ],
////                'denyCallback'=>function($rule, $action) {
////                    \Yii::$app->session->setFlash('error','This section is only for registered users.');
////                    $this->redirect(['index']);
////                },
//            ],
//        ];
//    }
    public function actions()
    {
        return [
            'captcha' => [
                'class' => \frontend\components\CaptchaAction::className(),
                'testLimit' => 1,
                'maxLength' => 6,
                'minLength' => 6,
                'padding' => 1,
                'height' => 50,
                'width' => 140,
                'offset' => 1,
            ],
//            'captcha' => [
//                'class' => 'yii\captcha\CaptchaAction',
//                'maxLength' => 2, //生成的验证码最大长度
//                'minLength' => 9, //生成的验证码最短长度
////                'fixedVerifyCode'=>'ddd',
//                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
//            ],
        ];
    }


    public function actionSession()
    {

        $session = Yii::$app->session;
        if ($session->isActive) {
            echo '开';
        } else {
            echo '关';
        }

        $session->addFlash('userinsert', 'You have succeful registers');
        $session->addFlash('userinsert', 'You have succeful registers22');
        $session->addFlash('userinsert', 'You have succeful registers33');
        $session->addFlash('userinsert', 'You have succeful registers44');

        $flash = $session->getFlash('userinsert');
        var_dump($flash);

    }


    public function actionSessionTable()
    {
        $session = Yii::$app->session;
        VarDumper::dump($session, 2, true);
        $session->set('user_id', 1234);
        $session->set('user_name', 'zly');

        $session['name.id']='ddd';

        echo $session->get('user_name');
    }



    public function actionCookies()
    {
        //set
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new Cookie([
            'name'=>'username',
            'value'=>'zly'
        ]));


        //get
        $cookies =  Yii::$app->request->cookies;
        echo $cookies->get('username');

        $cookies = Yii::$app->response->cookies;
        $cookies->remove('username');
    }


    public function actionEmail()
    {
//        $this->layout=false;
        $success = false;

        $model = new EmailForm();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            \Yii::$app->session->setFlash('success', 'Success!');
        }
        return $this->render('email', [
            'model' => $model,
//            'success'=>$success
        ]);
    }

    public function actionBuild()
    {
        $this->layout = false;

        echo Html::tag('h1', 'ALL cars');
        $cars = Car::find()->all();
        foreach ($cars as $car) {
            echo get_class($car) . ' ' . $car->name . "<br>";
        }


        echo Html::tag('h1', 'Family cars');
        $familyCars = FamilyCar::find()->all();
        foreach ($familyCars as $familyCar) {
            echo get_class($familyCar) . ' ' . $familyCar->name . "<br>";
        }

        echo Html::tag('h1', 'Family cars');
        $sportCars = SportCar::find()->all();
        foreach ($sportCars as $sportCar) {
            echo get_class($sportCar) . ' ' . $sportCar->name . "<br>";
        }


//        $users = new User();
//        $identity = User::findIdentity(1);
//        VarDumper::dump($identity,10,true);
//        $user = \Yii::$app->user;
//        $user->setIdentity($identity);
//        VarDumper::dump(\Yii::$app->user,10,true);
//        echo "<br>User_id:".\Yii::$app->user->id;
//        $builds = Build::find()->status(0)->all();
//        VarDumper::dump($builds,10,true);
//        $build_status = Build::find()->sta
//        $this->layout =false;
//        $test = new Test();
//        $test->detachBehavior('blamestamp');
//
//        $test->test = 'The price of success is hard work, dedication to the job at hand\'';
//        $test->touch('last_login');
//        $test->save();


//        $test = Test::find()->where('id=31')->one();
//        $test->test = '请求处理（Handling Requests）
//运行概述（Overview）
//Url 助手（Url） ';
//        $test->save();
//        VarDumper::dump($test,10,true);
//        echo $query->createCommand()->rawSql;
//        var_dump($test);
//        $test->touch('last_time');
//        return $this->renderContent(Html::tag('pre',
//            VarDumper::dumpAsString( $test->attributes
//        )));
//        echo Html::tag('pre',VarDumper::dumpAsString($test->attributes));
//        echo Html::tag('pre',
//            VarDumper::dumpAsString($test->attributes
//            ));
//      return $this->renderContent(Html::tag('pre',
//            VarDumper::dumpAsString($test->attributes
//      )));
    }

    public function actionUser()
    {
        return $this->renderContent('user');
    }

    public function actionSuccess()
    {
        \Yii::$app->session->setFlash('success', 'Everything went file');
        $this->redirect(['index']);
    }

    public function actionError()
    {
        \Yii::$app->session->setFlash('error', 'Everything went wrong!');
        $this->redirect(['index']);
    }

    public function actionIndex()
    {
        echo "Test index";
//        var_dump(\Yii::$app->helper->checkMobile(13164236100));
//        var_dump(\Yii::$app->helper->property);

//        hello();
//        return $this->render('index');
//        echo \Yii::$app->request->get('id');

//        return   \Yii::$app->response->setDownloadHeaders('http://www.baidu.com/logo.jpg');


//        \Yii::beginProfile('shequ');
//        $shequ = \Yii::$app->db->cache(function (Connection $db){
//            return Community::find()->select('id,name')->asArray()->column();
//        });
//        \Yii::endProfile('shequ');


//        echo \Yii::$app->controller->module->id."<br>";
//        echo \Yii::$app->controller->id."<br>";
//        echo \Yii::$app->controller->action->id."<br>";
//
//        $query = Province::find()->where(['LIKE','name','云']);
//
//        $commandQuery = clone  $query;
//        echo $commandQuery->createCommand()->rawSql;
//
//        var_dump(Province::find()->select('name,status')->asArray()->column());

//        return $this->goHome();
//        VarDumper::dump(\Yii::$app->getHomeUrl(), 10, true);
//        echo \Yii::getAlias('@web')."<br>";
//        echo \Yii::getAlias('@webroot')."<br>";
//        var_dump(\Yii::$aliases);
//        die();
//        return $this->render('index');
    }

    public function actionCache()
    {
        echo "db cache<br>";
        $cache = \Yii::$app->cache;
        VarDumper::dump($cache, 10, true);

//        VarDumper::dump(Build::find()->asArray()->all(),10,true);

//        $dependency1 = new DbDependency(['sql'=>'select count(*) from build']);
//        $dependency = new DbDependency(['sql'=>'SELECT COUNT(*) FROM build']);
//        $dependency = new ExpressionDependency(['expression'=>'\Yii::$app->params["name"]']);
//
        $cache->add('build', function ($cache) {
            return Build::find()->all();
        }, 1000);
//
//        VarDumper::dump($cache->get('build'),10,true);
    }


    public function actionImage()
    {
        echo 'images';
        $image = 'xxx.jpg';
        if (file_exists($image)) {
            echo 'yes';
        } else {
            echo 'no';
        }
        Image::frame($image, 5, '666', 50)
            ->rotate(-8)
            ->save('11.jpg');
    }

    public function actionQuery()
    {

        $query = new Query();
//        $result = $command->queryAll();
        $result = $query->from('city')->indexBy('name')->all();
        VarDumper::dump($result, 10, true);
//        $db = \Yii::$app->db;
//        VarDumper::dump($db->schema, 10, true);
//
//
//        die();
//        $command = \Yii::$app->db->createCommand('SELECT * FROM city WHERE citycode>:id', [':id' => 6402]);
//        echo $command->rawSql . "<br>";
//        $result = $command->queryColumn();
//        VarDumper::dump($result, 4, true);
        preg_grep('\d+',123);
    }

    public function actionAsset()
    {
        return $this->render('asset');
    }



    public function actionView($id=1)
    {

        $response  = \Yii::$app->response;
        $url = Url::current();
        echo $url;
        echo "<a href='$url'>刷新</a>";
//        return $response->sendContentAsFile("hellow orld",'hello.txt');
//        \Yii::$app->response->format = Response::FORMAT_JSON;
//        return '<b>hello</b>';

//
        die();
        return [
            'name'=>'zly',
            'age'=>20,
            'sex'=>1
        ];
//        return "hello";
//        $response = \Yii::$app->response;
//        $response->format = Response::FORMAT_JSON;
//        $response->data = ['message'=>'zly'];
//        return [
//            'message'=>'zly'
//        ];
//        $response->content = 'hello test view';
//        $response->send();
        die();
        echo 'dd';
        VarDumper::dump(\Yii::$app->response->headers,10,true);
        die();
        VarDumper::dump(\Yii::$app->request->getHeaders(),10,true);
        VarDumper::dump(\Yii::$app->request->getBodyParams(),10,true);
        VarDumper::dump($_SERVER,10,true);
//        VarDumper::dump(\Yii::$app->getUrlManager()->parseRequest(\Yii::$app->request), 10, true);
//        VarDumper::dump(\Yii::$app->request->userIP, 10, true);
//        VarDumper::dump(\Yii::$app->request->userHost, 10, true);
//        VarDumper::dump(\Yii::$app->request->userAgent, 10, true);
//        VarDumper::dump(\Yii::$app->request->csrfToken, 10, true);
//        VarDumper::dump(\Yii::$app->request->rawBody, 10, true);
//        echo $_SERVER['SCRIPT_FILENAME']."<br>";
//        $script_name =  $_SERVER['SCRIPT_FILENAME'];
//        echo realpath($script_name);
//        VarDumper::dump($_SERVER, 10, true);
//        VarDumper::dump($_COOKIE, 10, true);
//        VarDumper::dump($_SESSION, 10, true);
//        VarDumper::dump($_FILES, 10, true);
//        echo \Yii::$app->request->scriptFile;
//        VarDumper::dump(\Yii::$app->request, 10, true);

//        $formatter = \Yii::$app->formatter;
//        echo $formatter->asImage('<b>zlyjava@126.com</b><script>alert("ss")</script>')."<br>";
//        echo time()."<br>";
//        $time ='1502881827';
//        echo $formatter->asOrdinal($time);
//        $p = \Yii::$app->security->encryptByKey('helloworld','zly');
//        echo $p."<br>";
//        echo \Yii::$app->security->decryptByKey($p,'zly')."<br>";
//        $pass =  \Yii::$app->security->generatePasswordHash('admin');
//        echo $pass;
//        $hello ='$2y$13$sNWi.3mhvC5VrMs2UAHuc.BwxRbx6.h2iarv6JaoetJ/WRN6Zo5m6';
//        var_dump(\Yii::$app->security->validatePassword('admin',$hello));

        echo '<br>----<br>';
        VarDumper::dump(\Yii::$app->components,2,true);
//        echo Url::to(['site/index']);
        $urlmanager = \Yii::$app->urlManager;
        VarDumper::dump($urlmanager,10,true);



//        $result = (new Query())->select('id,community_name')->from('build')->where(['>','id',1])->column();
//        VarDumper::dump($result,10,true);
//        $this->layout = false;
//        return $this->render('view');

//        echo \Yii::$app->getRequest()->getUrl();
//        return $this->refresh('#hello');
//        $city = City::find()->limit(4)->asArray()->all();
//        return $this->asJson($city);
//        return $this->goBack();
//        return $this->renderAjax('/aa/bb');
//        ($data);

//        echo $this->viewPath."<br>";
//        return $this->refresh();
//        $this->layout = false;

//        return $this->render('/aa/bb');
//        return $this->renderContent("this is <a href='#'>df</a>");
//        echo \Yii::getAlias('@app/views');
//        return $this->renderFile("@app/views/aa/bb.php");
//        return $this->renderAjax('/aa/bb');
    }

    public function actionMessageComponent()
    {
        \Yii::$app->message->display('I am Yii2.0 programe');
    }


}