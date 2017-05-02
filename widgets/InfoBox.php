<?php

namespace yeesoft\dashboard\widgets;

use yii\helpers\Html;
use yii\bootstrap\Widget;
use yeesoft\helpers\FA;
use yii\helpers\Inflector;

abstract class InfoBox extends Widget
{

    /**
     * @var array the HTML attributes for the widget content container tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [
        'class' => 'info-box'
    ];

    /**
     * @var array the HTML attributes for the widget container tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $containerOptions = [
        'class' => 'col-md-3 col-sm-6 col-xs-12'
    ];

    /**
     * @var string Color CSS class of the widget.
     */
    public $color = 'bg-light-blue';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        Html::addCssClass($this->options, $this->color);
        $this->options['data-id'] = $this->getWidgetId();
    }

    public function run()
    {
        if ($this->hasAccess) {
            $icon = $this->renderIcon();
            $body = $this->renderBody();
            $content = Html::tag('div', $icon . $body, $this->options);

            return Html::tag('div', $content, $this->containerOptions);
        }
    }

    public function renderIcon()
    {
        $icon = ($this->icon) ? FA::i($this->icon) : '';
        return Html::tag('span', $icon, ['class' => 'info-box-icon']);
    }

    public function renderBody()
    {
        $title = Html::tag('span', $this->title, ['class' => 'info-box-text']);
        $number = Html::tag('span', number_format($this->number, 0, '.', ' '), ['class' => 'info-box-number']);
        $progressBar = Html::tag('div', '', ['class' => 'progress-bar', 'style' => ['width' => $this->progress . '%']]);
        $progress = Html::tag('div', $progressBar, ['class' => 'progress']);
        $description = Html::tag('span', $this->description, ['class' => 'progress-description']);

        return Html::tag('div', $title . $number . $progress . $description, ['class' => 'info-box-content']);
    }

    public function getWidgetId()
    {
        return Inflector::slug(str_replace('\\', '-', self::className()));
    }

    public function getHasAccess()
    {
        return true;
    }

    abstract public function getTitle();

    abstract public function getIcon();

    abstract public function getNumber();

    abstract public function getProgress();

    abstract public function getDescription();
}
