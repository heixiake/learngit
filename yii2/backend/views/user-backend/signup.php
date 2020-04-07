<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 17/07/2017
 * Time: 3:09 PM
 */

/** @var  $this yii\web\View */
/** @var  $from yii\bootstrap\ActiveForm */
/** @var $model \backend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '添加用户';
$this->params['breadcrumbs'][]= $this->title;

?>

<div class="site-signup">
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id'=>'form-signup']) ;?>

            <?=  $form->field($model,'username')->label('登录名')->textInput() ?>
            <?= $form->field($model,'email')->label('邮箱') ?>
            <?= $form->field($model,'password')->label('密码')->passwordInput() ?>

            <div class="form-group">
                <?= \kartik\helpers\Html::submitButton('添加',['class'=>'btn btn-primary']) ?>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>
