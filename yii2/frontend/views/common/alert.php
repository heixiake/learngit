<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 11/06/2017
 * Time: 5:14 PM
 */

use yii\bootstrap\Alert;
?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <?= Alert::widget([
        'options'=> ['class'=>'alert-success'],
        'body'=>Yii::$app->session->getFlash('success')
    ]); ?>
<?php endif; ?>

<?php
    if (Yii::$app->session->hasFlash('error')) :?>
     <?= Alert::widget([
         'options'=>['class'=>'alert-danger'],
         'body'=>Yii::$app->session->getFlash('error'),
        ]); ?>
<?php endif; ?>
