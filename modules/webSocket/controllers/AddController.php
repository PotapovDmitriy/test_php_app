<?php


namespace app\modules\webSocket\controllers;


use yii\web\Controller;

class AddController extends Controller
{
    /**
     * @return string
     */
    public function actionShow()    {
        if (!\Yii::$app->user->can('editTelemetry')) {
            return $this->render('@app/views/site/accessDenied');
        }
        return $this->render('addTelemetry');
    }
}