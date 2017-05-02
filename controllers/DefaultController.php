<?php

namespace yeesoft\dashboard\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yeesoft\models\UserSetting;
use yeesoft\controllers\BaseController;

class DefaultController extends BaseController
{

    /**
     * @var string dashboard layout file
     */
    public $layout = '@vendor/yeesoft/yii2-yee-core/views/layouts/main';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return ArrayHelper::merge([
                    'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                            'get-setting' => ['post'],
                            'set-setting' => ['post'],
                        ],
                    ],
                        ], parent::behaviors());
    }

    public function actionIndex()
    {

        $infoBoxes = $this->module->infoBoxes;
        $selectedInfoBoxes = $this->module->selectedInfoBoxes;
        $layoutId = Yii::$app->user->settings->get('dashboard.layoutId', 1);

        $widgets = [
            ['row' => 0, 'column' => 0, 'order' => 1, 'class' => 'yeesoft\post\widgets\dashboard\PostWidget', 'collapsed' => false],
            ['row' => 0, 'column' => 0, 'order' => 2, 'class' => 'yeesoft\comment\widgets\dashboard\CommentWidget', 'collapsed' => false],
            ['row' => 0, 'column' => 1, 'order' => 1, 'class' => 'yeesoft\post\widgets\dashboard\PostWidget', 'collapsed' => true],
            ['row' => 1, 'column' => 0, 'order' => 1, 'class' => 'yeesoft\post\widgets\dashboard\PostWidget', 'collapsed' => false],
            ['row' => 1, 'column' => 1, 'order' => 1, 'class' => 'yeesoft\post\widgets\dashboard\PostWidget', 'collapsed' => false],
            ['row' => 0, 'column' => 0, 'order' => 1, 'class' => 'yeesoft\post\widgets\dashboard\PostWidget', 'collapsed' => true],
            ['row' => 1, 'column' => 1, 'order' => 2, 'class' => 'yeesoft\post\widgets\dashboard\PostWidget', 'collapsed' => false],
        ];

//echo '<pre>';
//print_r($widgets);



        $layouts = [
            1 => [[12]],
            2 => [[12], [6, 6]],
            3 => [[12], [5, 7]],
            4 => [[12], [7, 5]],
            5 => [[6, 6]],
            6 => [[5, 7]],
            7 => [[7, 5]],
        ];

        foreach ($widgets as &$w) {
            if (!isset($layouts[$layoutId][$w['row']])) {
                $w['row'] = 0;
            }

            if (!isset($layouts[$layoutId][$w['row']][$w['column']])) {
                $w['column'] = 0;
            }
        }

//echo '<pre>';
//print_r($widgets);
//echo '</pre>';

        $grouped = [];
        foreach ($widgets as $widget) {
            $grouped[$widget['row']][$widget['column']][] = $widget;
        }
        $widgets = $grouped;
//echo '<pre>';
//print_r($grouped);
//echo '</pre>';


        return $this->render('index', compact('widgets', 'infoBoxes', 'selectedInfoBoxes', 'layouts', 'layoutId'));
    }

    public function actionGetInfoBox()
    {
        if ($widgetId = Yii::$app->request->post('widgetId')) {

            $infoBoxes = $this->module->infoBoxes;
            foreach ($infoBoxes as $infoBox) {
                if ($infoBox::getWidgetId() === $widgetId) {
                    return $this->asJson(['content' => $infoBox::widget()]);
                }
            }
        } else {
            $content = '';
            $infoBoxes = $this->module->selectedInfoBoxes;

            foreach ($infoBoxes as $infoBox) {
                $content .= $infoBox::widget();
            }

            return $this->asJson(['content' => $content]);
        }
    }

    public function actionGetSetting()
    {
        $name = Yii::$app->request->post('name');
        $value = Yii::$app->user->settings->get($name);

        return $this->asJson(['value' => $value]);
    }

    public function actionSetSetting()
    {
        $name = Yii::$app->request->post('name');
        $value = Yii::$app->request->post('value');

        return $this->asJson(Yii::$app->user->settings->set($name, $value));
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
