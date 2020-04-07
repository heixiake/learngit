<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 11/06/2017
 * Time: 12:36 AM
 * @var $panel backend\Panel\UserPanel
 */
use  yii\widgets\DetailView;

?>
<h1>User prfile</h1>

<?php if (!empty($panel->data)) :?>
    <?= DetailView::widget([
        'model'=>$panel->data,
        'attributes'=> [
            'id',
            'useranme',
        ]
    ]) ?>
<?php else: ?>
    <p>Guest session.</p>
<?php endif; ?>
