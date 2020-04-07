<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/06/2017
 * Time: 10:21 PM
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;


$form = ActiveForm::begin();
foreach ($prizes as $i=>$prize) {

    echo $form->field($prize,"[$i]amount")->label($prize->name);
}

echo Html::submitButton('submit',[
    'class'=>'btn btn-success'
]);

ActiveForm::end();
?>



