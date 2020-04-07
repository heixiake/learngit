<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 12/03/2017
 * Time: 12:24 AM
 */

use yii\helpers\Html;
?>

<p>You have entered the following information:</p>

<ul>
    <li><lable>Name</lable>: <?= Html::encode($model->name) ?></li>
    <li><lable>Email</lable>: <?= Html::encode($model->email) ?></li>
</ul>
