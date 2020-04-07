<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/06/2017
 * Time: 10:23 AM
 */


?>

    <?php $form= \yii\widgets\ActiveForm::begin([
            'options'=>[
                    'class'=>'form-inline'
            ]
    ]) ?>
    <div class="control-group">
        <div class="controls">
            <?=$form->field($model,'email')->textInput(['class'=>'form-control']);?>
        </div>
        <div class="control-group">
            <?= \frontend\components\RangeInputWidget::widget([
                'model'=>$model,
                'attributeFrom'=>'from',
                'attributeTo'=>'to',
                'htmlOptions'=>[
                        'class'=>'form-control'
                ]
            ])?>
        </div>
        <?php if (\yii\captcha\Captcha::checkRequirements() && Yii::$app->user->isGuest): ?>
            <div class="control-grop">
                <?php echo $form->field($model,'verifyCode')->widget(\yii\captcha\Captcha::className(),[
                    'template' => '<div class="row"><div class="col-lg-7">{input}</div><div class="col-lg-4">{image}</div></div>',
                    'imageOptions' => ['title' => '换一个', 'alt' => '验证码', 'style' => 'cursor:pointer;'
                ]])->label('码') ?>
<!--
<!--                --><?php //echo \yii\helpers\Html::error($model,'verifyCode',['class'=>'help-block']) ?>
            </div>
        <?php endif; ?>
        <div class="control-group">
            <label for="" class="control-label"></label>
            <div class="controls">
                <?= \yii\helpers\Html::submitButton('submit') ?>
            </div>
        </div>
    </div>
    <?php \yii\widgets\ActiveForm::end(); ?>
