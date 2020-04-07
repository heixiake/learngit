<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 10/04/2017
 * Time: 10:35 AM
 */

namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class TestAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
//    public $sourcePath = '@webroot/soure';

    public $css = [
        'css/hello.css'
    ];

    public $cssOptions = [

    ];

    public $js = [
        'js/test.js'
    ];

    public $jsOptions = [
        'position'=>View::POS_READY
    ];

}