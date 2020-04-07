<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 11/06/2017
 * Time: 12:31 AM
 * @var $panel backend\Panel\UserPanel
 */
use yii\helpers\Html;

?>

<div class="yii-debug-toolbar__block">
    <?php if (!empty($panel->data)): ?>
    <a href="<?= $panel->getUrl() ?>">
        User <span class="yii-debug-toolbar__label yii-debug-toolbar__label_info">
            <?= Html::encode($panel->data['username']) ?>
        </span>
    </a>
    <?php else: ?>
        <a href="<?= $panel->getUrl() ?>">Guest session</a>
    <?php endif; ?>
</div>
