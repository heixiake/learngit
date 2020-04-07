<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
//        'cache' => [
////            'class' => 'yii\caching\FileCache',
//            'class' => 'yii\caching\DbCache',
//            'db' => 'dbcache',
//            'cacheTable' => 'cache',
//            'keyPrefix'=>'zly_'
//        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
            'defaultRoles'=>['guest']
        ],
        'helper' => [
            'class'=>'common\components\Helper',
        ],
        'log' => [
//            'traceLevel' => YII_DEBUG ? 1 : 0,
//            'flushInterval'=>1,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::className(),
                    'levels' => ['error'],
//                    'categories'=>['catelog'],
                    'logVars' => ['_GET', '_POST'],
                    'logFile' => '@runtime/logs/error.log'
                ]
//                [
//                    'class' => 'yii\log\FileTarget',
////                    'categories'=>['yii\web\HttpExcepton:404'],
//                    'levels' => ['error', 'warning','trace','info'],
//
////                    'levels' => ['error'],
////                    'prefix' =>function($message){
////                        return ['log is:'];
////                    },
//                    'exportInterval'=>1,
//                    'logVars'=>[],
////                    'logFile'=>'@runtime/logs/404.log'
//                ],
//                [
//                    'class' => 'yii\log\DbTarget',
////                    'levels' => ['error'],
//                    'levels' => ['error', 'warning','trace','info'],
//                ],
//                [
//                      'class' => 'yii\log\EmailTarget',
////                      'levels' => ['error'],
//                      'levels' => ['error', 'warning','trace','info'],
//                      'message' => [
//                          'to' => 'zly@126.com',
//                      ],
//                ]

            ],
        ],
    ],
];
