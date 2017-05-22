<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
?>
<?= Html::beginTag('div', ['class' => 'row widgets-row', 'data-row' => $rowId]) ?>
<?php foreach ($columns as $key => $width) : ?>
    <?= Html::beginTag('section', ['class' => "col-lg-{$width} connectedSortable widgets-column", 'data-column' => $key]) ?>
    <?php if (isset($widgets[$key])): ?>
        <?php foreach ($widgets[$key] as $widget) : ?>
            <?php $widgetClass = $widget->class ?>
            <?= $widgetClass::widget(['collapsed' => $widget->collapsed]) ?>
        <?php endforeach; ?>
    <?php endif; ?>
    <?= Html::endTag('section') ?>
<?php endforeach; ?>
<?= Html::endTag('div') ?>