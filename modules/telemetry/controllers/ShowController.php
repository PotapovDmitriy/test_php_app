<?php
namespace app\modules\telemetry\controllers;


use app\models\Telemetry;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class ShowController extends Controller
{
    /**
     * Displays telemetry page.
     *
     * @return string
     */
    public function actionList()
    {
        $models = Telemetry::findAllTelemetry();

        return  $this->render('telemetryView', ['data' => $models]);
    }
}
