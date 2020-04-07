<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'test',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
//            'tablePrefix'=>'ll_'
        ],
        'session' => [
            'class' => 'yii\web\DbSession',
            'sessionTable' => 'yiisession'
        ],

        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],

        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'password'=> 'root',
            'database' => 0,
        ],
        'message' => [
            'class' => 'frontend\components\MessageComponent'
        ],
//        'response' => [
//            'class' => 'yii\web\Response',
//            'on beforeSend' => function ($event) {
//                $response = $event->sender;
//                if ($response->data !== null) {
//                    $response->data = [
//                        'success' => $response->isSuccessful,
//                        'data' => $response->data,
//                    ];
//                    $response->statusCode = 200;
//                }
//            },
//        ],
        'urlManager' => [

            // Disable index.php
//            'showScriptName' => false,
            // Disable r= routes
//            'enablePrettyUrl' => true,

            'suffix'=>'.shtml',
            // Disable site/ from the URL
            'rules' => [
                'citys'=>'city/index',
                'city/<id:\d+>'=>'city/view',
                'city/update/<id:\d+>'=>'city/update',
                'city/delete/<id:\d+>'=>'city/delete',



                // 为路由指定了一个别名，以 post 的复数形式来表示 post/index 路由
                'posts' => 'post/index',
                // id 是命名参数，post/100 形式的URL，其实是 post/view&id=100
                'post/<id:\d+>' => 'post/view',
                // controller action 和 id 以命名参数形式出现
                '<controller:(post|comment)>/<id:\d+>/<action:(create|update|delete)>'
                => '<controller>/<action>',
                // 包含了 HTTP 方法限定，仅限于DELETE方法
                'DELETE <controller:\w+>/<id:\d+>' => '<controller>/delete',
                // 需要将 Web Server 配置成可以接收 *.digpage.com 域名的请求
                'http://<user:\w+>.digpage.com/<lang:\w+>/profile' => 'user/profile',


                '<id:\d+>/<alias:[A-Za-z0-9 -_.]+>' => 'articles/categories/view',
                '<cat>/<id:\d+>/<alias:[A-Za-z0-9 -_.]+>' => 'articles/items/view',
            ],
        ],
//        'assetManager' => [
//            'bundles' => [
//                'dmstr\web\AdminLteAsset' => [
//                    'skin' => 'skin-green-light',
//                ],
//            ],
//        ],
//        'log' => [
//            'traceLevel' => YII_DEBUG ? 3 : 0,
//            'targets' => [
//                [
//                    'class' => 'yii\log\FileTarget',
//                    'levels' => ['error', 'warning','trace','info'],
//                ],
//                [
//                    'class' => 'yii\log\DbTarget',
//                    'levels' => ['error', 'warning','trace','info'],
//                ],
//            ],
//        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'modules'=>[
        //Module Hello
        'hello' => [
            'class' => 'frontend\modules\hello\Module',
        ],
        // Module Articles
        'articles' => [
            'class' => 'cinghie\articles\Articles',
            'userClass' => 'dektrium\user\models\User',

            // Select Languages allowed
            'languages' => [
                "it-IT" => "it-IT",
                "en-GB" => "en-GB"
            ],

            // Select Date Format
            'dateFormat' => 'd F Y',

// Select Editor: no-editor, ckeditor, imperavi, tinymce, markdown
'editor' => 'ckeditor',

		// Select Path To Upload Category Image
        'categoryImagePath' => '@webroot/img/articles/categories/',
        // Select URL To Upload Category Image
        'categoryImageURL'  => '@web/img/articles/categories/',
        // Select Path To Upload Category Thumb
        'categoryThumbPath' => '@webroot/img/articles/categories/thumb/',
        // Select URL To Upload Category Image
        'categoryThumbURL'  => '@web/img/articles/categories/thumb/',

        // Select Path To Upload Item Image
        'itemImagePath' => '@webroot/img/articles/items/',
        // Select URL To Upload Item Image
        'itemImageURL'  => '@web/img/articles/items/',
        // Select Path To Upload Item Thumb
        'itemThumbPath' => '@webroot/img/articles/items/thumb/',
        // Select URL To Upload Item Thumb
        'itemThumbURL'  => '@web/img/articles/items/thumb/',

		// Select Path To Upload Attachments
        'attachPath' => '@webroot/attachments/',
		// Select URL To Upload Attachment
        'attachURL' => '@web/img/articles/items/',
		// Select Image Types allowed
		'attachType' => 'application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, .csv, .pdf, text/plain, .jpg, .jpeg, .gif, .png',

		// Select Image Name: categoryname, original, casual
		'imageNameType' => 'categoryname',
		// Select Image Types allowed
		'imageType'     => 'jpg,jpeg,gif,png',
		// Thumbnails Options
		'thumbOptions'  => [
    'small'  => ['quality' => 100, 'width' => 150, 'height' => 100],
    'medium' => ['quality' => 100, 'width' => 200, 'height' => 150],
    'large'  => ['quality' => 100, 'width' => 300, 'height' => 250],
    'extra'  => ['quality' => 100, 'width' => 400, 'height' => 350],
],

        // Show Titles in the views
        'showTitles' => true,
	],

	// Module Kartik-v Grid
	'gridview' =>  [
    'class' => '\kartik\grid\Module',
],

	// Module Kartik-v Markdown Editor
	'markdown' => [
    'class' => 'kartik\markdown\Module',
],
    ],

    'name' => 'api接口',
    'language' => 'zh-CN',
    'params' => $params,
];
