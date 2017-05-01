<?php

namespace yeesoft\dashboard\controllers;

use yii\helpers\ArrayHelper;
use yeesoft\controllers\BaseController;

class DefaultController extends BaseController
{

    /**
     * Layout file for admin panel
     *
     * @var string
     */
    public $layout = '@vendor/yeesoft/yii2-yee-core/views/layouts/main';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionElements()
    {
        return $this->render('elements');
    }
    public function actionElements2()
    {
        return $this->render('elements2');
    }

    /**
     * @inheritdoc
     */
    public $widgets = NULL;

//    public function actions()
//    {
//
//        if ($this->widgets === NULL) {
//            $this->widgets = [
//                'yeesoft\comment\widgets\dashboard\Comments',
//                    [
//                    'class' => 'yeesoft\widgets\dashboard\Info',
//                    'position' => 'right',
//                ],
//                    [
//                    'class' => 'yeesoft\media\widgets\dashboard\Media',
//                    'position' => 'right',
//                ],
//                'yeesoft\post\widgets\dashboard\Posts',
//                'yeesoft\user\widgets\dashboard\Users',
//            ];
//        }
//
////        return ArrayHelper::merge(parent::actions(), [
////            'index' => [
////                'class' => 'yeesoft\web\DashboardAction',
////                'widgets' => $this->widgets,
////            ]
////        ]);
//    }

}
