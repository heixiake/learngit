<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'admin'=>[
            'class'=>'mdm\admin\Module',
        ]
    ],
    'aliases'=>[
        '@mdm/admin'=>'@vendor/mdmsoft/yii2-admin',
    ],
    'components' => [
        'assetManager'=>[
            'bundles'=>[
                'dmstr\web\AdminLteAsset'=>[
                    'skin'=>'skin-blue'
                ]
            ],
        ],
        'user' => [
//            'identityClass' => 'common\models\User',
//            'enableAutoLogin' => true,
               'identityClass'=>'backend\models\UserBackend',
               'enableAutoLogin'=>true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            //这里是允许访问的action
            //controller/action
            '*',
        ]
    ],
    'params' => $params,
];
