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
