<?php


namespace app\modules\webSocket\controllers;


use app\modules\users\models\User;
use yii\web\Controller;

class AddController extends Controller
{
    public function actionShow(){

        return $this->render('addTelemetry');
    }
}