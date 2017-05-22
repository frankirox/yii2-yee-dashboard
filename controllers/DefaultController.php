<?php

namespace yeesoft\dashboard\controllers;

use Yii;
use yii\web\Response;
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
        $layouts = $this->module->layouts;
        $selectedLayout = $this->module->selectedLayout;
        $widgets = $this->module->dashboardWidgets;
        $infoBoxes = $this->module->infoBoxes;
        $selectedInfoBoxes = $this->module->selectedInfoBoxes;

        return $this->render('index', compact('widgets', 'infoBoxes', 'selectedInfoBoxes', 'layouts', 'selectedLayout'));
    }

    public function actionGetWidget()
    {
        if ($widgetId = Yii::$app->request->post('widgetId')) {

            $widgets = $this->module->widgets;
            foreach ($widgets as $widget) {
                if ($widget::getWidgetId() === $widgetId) {
                    return $this->asJson(['content' => $widget::widget()]);
                }
            }
        }
        
        throw new \yii\web\BadRequestHttpException('Invalid Widget Id!');
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
        Yii::$app->response->format = Response::FORMAT_JSON;

        $name = Yii::$app->request->post('name');
        $value = Yii::$app->user->settings->get($name);

        return $this->asJson(['value' => $value]);
    }

    public function actionSetSetting()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $name = Yii::$app->request->post('name');
        $value = Yii::$app->request->post('value');

        if (Yii::$app->user->settings->set($name, $value)) {
            return $this->asJson(['success' => true]);
        }

        throw new \yii\web\ServerErrorHttpException('Unexpected Exception');
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
