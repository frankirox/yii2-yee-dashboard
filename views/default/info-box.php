<?php
/* @var $this yii\web\View */

$showInfoBoxes = filter_var(Yii::$app->user->settings->get('dashboard.showInfoBoxes'), FILTER_VALIDATE_BOOLEAN);

?>
<div class="row info-box-container">
    <?php if ($showInfoBoxes): ?>
        <?php foreach ($infoBoxes as $infoBox) : ?>
            <?= $infoBox::widget() ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>