<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

Yii::$app->request;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>
    <?php echo \yii\helpers\HTMLPurifier::process($av); ?>
<!--    --><?php //echo \yii\helpers\HtmlPurifier::process($av); ?>
    <code><?= __FILE__ ?></code>
</div>
