<?php
use common\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var $this \yii\web\View;
 */
?>

<h1>this is test index</h1>

<?php

    echo \frontend\components\HelloWidget::widget(['message'=>'this is test widget']);

?>

<?php

echo \yii\jui\DatePicker::widget([
    'language'=>'zh-CN',
    'value'=>'1492569418',
    'name'=>'date_from',
    'clientOptions' => [
        'dateFormat' => 'yyyy-mm-dd',
    ],
])

?>
<?php
//var_dump($this->context);
?>

<?php
//$this->beginBlock('test_1')
?>
<!--this is block name is test_1-->
<?php
//$this->endBlock();

?>
<?php
//$form = ActiveForm::begin(['id'=>'contact']);
//?>
<!---->
<!--?//= $form->field($model, 'name'); ?>
<!--//= $form->field($model, 'body'); ?>
<!--//= $form->field($model, 'subject'); ?>
<!---->
<?php //echo \yii\helpers\Html::submitButton('提交', ['class'=>'btn btn-primary']); ?>
<?php // ActiveForm::end();?>
