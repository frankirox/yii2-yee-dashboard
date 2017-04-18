<?php

namespace yeesoft\dashboard\widgets;

use yii\helpers\Html;
use yii\bootstrap\Widget;
use yeesoft\helpers\FA;

abstract class DashboardWidget extends Widget
{

    /**
     * @var array the HTML attributes for the widget container tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [
        'class' => 'box box-primary'
    ];
    public $headerOptions = [
        'class' => 'box-header with-border'
    ];
    public $bodyOptions = [
        'class' => 'box-body'
    ];
    public $footerOptions = [
        'class' => 'box-footer no-border clearfix'
    ];
    public $icon;
    public $title;
    public $visible = true;
    public $collapsed = false;
    public $collapsedClass = 'collapsed-box';

    public function init()
    {
        parent::init();

        if ($this->collapsed) {
            Html::addCssClass($this->options, $this->collapsedClass);
        }
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->visible) {
            $header = $this->renderHeader();
            $body = $this->renderBody();
            $footer = $this->renderFooter();
            return Html::tag('div', $header . $body . $footer, $this->options);
        }
    }

    abstract public function renderContent();

    public function renderHeader()
    {
        $icon = ($this->icon) ? FA::i($this->icon) : '';
        $title = Html::tag('h3', $this->title, ['class' => 'box-title']);
        $tools = $this->renderHeaderTools();
        return Html::tag('div', $icon . $title . $tools, $this->headerOptions);
    }

    public function renderHeaderTools()
    {
        $collapse = Html::button(FA::i(FA::_MINUS), ['data' => ['widget' => 'collapse'], 'type' => 'button', 'class' => 'btn btn-box-tool']);
        $close = Html::button(FA::i(FA::_CLOSE), ['data' => ['widget' => 'remove'], 'type' => 'button', 'class' => 'btn btn-box-tool']);

        return Html::tag('div', $collapse . $close, ['class' => 'box-tools pull-right']);
    }

    public function renderFooter()
    {
        if ($footerContent = $this->renderFooterContent()) {
            return Html::tag('div', $footerContent, $this->footerOptions);
        }
    }

    public function renderFooterContent()
    {
        return false;
    }

    public function renderBody()
    {
        return Html::tag('div', $this->renderContent(), $this->bodyOptions);
    }

}
