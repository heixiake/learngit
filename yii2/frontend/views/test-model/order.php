<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/06/2017
 * Time: 11:20 PM
 */


$form = \yii\widgets\ActiveForm::begin([

])
?>

<?= $form->field($user,'first_name')->textInput() ?>
<?= $form->field($user,'last_name')->textInput() ?>
<?= $form->field($user,'phone')->textInput() ?>
<?= $form->field($order,'product_id')->dropDownList(\yii\helpers\ArrayHelper::map(
    \common\models\Oproduct::find()->all(),'id','title'
)) ?>

<?= $form->field($order,'address')->textInput();  ?>

<?= \yii\helpers\Html::submitButton('save',['class'=>'btn btn-primary']) ?>

<?php \yii\widgets\ActiveForm::end() ?>


