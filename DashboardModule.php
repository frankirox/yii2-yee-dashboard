<?php

/**
 * @link http://www.yee-soft.com/
 * @copyright Copyright (c) 2017 Taras Makitra
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */

namespace yeesoft\dashboard;

use Yii;

/**
 * Dashboard Module For YeeCMS
 *
 * @author Taras Makitra
 */
class DashboardModule extends \yii\base\Module
{

    /**
     * Version number of the module.
     */
    const VERSION = '0.2.0';

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'yeesoft\dashboard\controllers';

    /**
     * @var array 
     */
    public $widgets;

    /**
     * @var array 
     */
    public $infoBoxes;

    /**
     * @var integet 
     */
    public $defaultLayout = 6;

    /**
     * @var array 
     */
    public $layouts = [
        1 => [[12]],
        2 => [[12], [6, 6]],
        3 => [[12], [5, 7]],
        4 => [[12], [7, 5]],
        5 => [[6, 6]],
        6 => [[5, 7]],
        7 => [[7, 5]],
    ];

    public function getSelectedLayout()
    {
        return Yii::$app->user->settings->get('dashboard.layoutId', $this->defaultLayout);
    }

    public function getSelectedWidgets()
    {
        $result = [];

        if (is_array($this->widgets)) {
            if ($widgets = Yii::$app->user->settings->get('dashboard.widgets')) {

                $classNames = [];

                //create array of widget ids and class names
                foreach ($this->widgets as $widget) {
                    $classNames[$widget::getWidgetId()] = $widget;
                }

                foreach ($widgets as $widget) {
                    if (isset($classNames[$widget->widget])) {
                        $className = $classNames[$widget->widget];
                        if ($className::getHasAccess()) {
                            $widget->class = $className;
                            $widget->collapsed = filter_var($widget->collapsed, FILTER_VALIDATE_BOOLEAN);
                            $result[$widget->widget] = $widget;
                        }
                    }
                }
            } else {
                //filter not allowed widgets
                $widgets = array_filter($this->widgets, function($widget) {
                    return $widget::getHasAccess();
                });

                foreach ($widgets as $n => $widget) {
                    $widgetId = $widget::getWidgetId();
                    $result[$widgetId] = (object) [
                                'row' => (int) !in_array($n % 4, [0, 1]),
                                'column' => (int) ($n % 2),
                                'class' => $widget,
                                'collapsed' => false,
                    ];
                }
            }
        }

        return $result;
    }
    
    public function getDashboardWidgets()
    {
        $layouts = $this->layouts;
        $layout = $this->selectedLayout;
        $widgets = $this->selectedWidgets;

        foreach ($widgets as &$w) {
            if (!isset($layouts[$layout][$w->row])) {
                $w->row = 0;
            }

            if (!isset($layouts[$layout][$w->row][$w->column])) {
                $w->column = 0;
            }
        }

        $grouped = [];
        foreach ($widgets as $widget) {
            $grouped[$widget->row][$widget->column][] = $widget;
        }

        return $grouped;
    }

    public function getSelectedInfoBoxes()
    {
        if (is_array($this->infoBoxes)) {

            if ($infoBoxes = Yii::$app->user->settings->get('dashboard.infoBoxes')) {

                $result = $keys = [];

                //Get widget id of info boxes
                foreach ($this->infoBoxes as $infoBox) {
                    $keys[$infoBox::getWidgetId()] = $infoBox;
                }

                //Filter not existing info boxes
                $infoBoxes = array_intersect($infoBoxes, array_keys($keys));

                //Sort info boxes by user order
                foreach ($infoBoxes as $infoBox) {
                    $result[] = $keys[$infoBox];
                }

                return array_unique($result);
            } else {
                //filter not allowed info boxes
                $infoBoxes = array_filter($this->infoBoxes, function($widget) {
                    return $widget::getHasAccess();
                });

                return array_slice($infoBoxes, 0, 4);
            }
        }

        return [];
    }

}
