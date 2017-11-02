<?php

use yeesoft\helpers\Html;
use yii\base\DynamicModel;
use backend\assets\AppAsset;

/* @var $this yii\web\View */

AppAsset::register($this);

$this->title = 'Checkbox & Radio';

$model = new DynamicModel(['test']);
$model->addRule('test', 'safe');
?>

<?= Html::activeCheckbox($model, 'test') ?>

<?= Html::activeCheckbox($model, 'test', ['disabled' => true]) ?>

<?php $model->test = true; ?>
<?= Html::activeCheckbox($model, 'test', ['disabled' => true]) ?>

<?= Html::activeCheckboxList($model, 'test', ['Value 1', 'Value 2', 'Value 3']) ?>

<?= Html::activeRadio($model, 'test') ?>

<?= Html::activeRadio($model, 'test', ['disabled' => true]) ?>

<?= Html::activeRadioList($model, 'test', ['Value 1', 'Value 2', 'Value 3']) ?>

<?= Html::checkbox('test') ?>

<?= Html::checkboxList('test', ['Value 1', 'Value 2', 'Value 3']) ?>

<?= Html::radio('test') ?>

<?= Html::radioList('test', ['Value 1', 'Value 2', 'Value 3']) ?>