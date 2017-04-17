<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
?>
<div class="row">
    <?php foreach ($columns as $key => $width) : ?>
        <section class="col-lg-<?= $width ?> connectedSortable">
            <?php foreach ($widgets[$key] as $widget) : ?>
                <?= $this->render('/default/widget', ['widget' => $widget]) ?>
            <?php endforeach; ?>
        </section>
    <?php endforeach; ?>
</div>