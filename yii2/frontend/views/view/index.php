<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 11/06/2017
 * Time: 10:25 PM
 */

/**
 * @var $this \yii\web\View
 */


\yii\helpers\VarDumper::dump($this->context,10,true);
?>

<h1><?= $this->context->pageTitle ?></h1>

<p>Hello call. <?php $this->context->hello() ?></p>