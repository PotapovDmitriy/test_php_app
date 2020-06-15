<?php

namespace app\modules\telemetry\controllers;


use app\models\Telemetry;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;

class ShowController extends Controller
{
    /**
     * Displays telemetry page.
     *
     * @return string
     */
    public function actionList()
    {
        if (!\Yii::$app->user->can('editTelemetry')) {
            return $this->render('@app/views/site/accessDenied');
        }
        $dataProvider = new ActiveDataProvider([
            'query' => \app\models\Telemetry::find()
        ]);
        return $this->render('telemetryView', ['data' => $dataProvider]);
    }
}
