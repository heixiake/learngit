<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/06/2017
 * Time: 10:51 PM
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<h1>Delivery form</h1>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->dropDownList($model->typeList(),[
        'prompt'=>'请选择'
    ]) ?>

    <?= $form->field($model, 'address')?>

    <div class="form-group">
        <?= Html::submitButton('submit',[
            'class'=>'btn btn-primary'
        ]) ?>
    </div>


<?php ActiveForm::end(); ?>
