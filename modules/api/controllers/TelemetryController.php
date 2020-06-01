<?php

namespace app\modules\api\controllers;

use app\models\Telemetry;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\auth\HttpBearerAuth;

/**
 * Class TelemetryController
 * @package app\modules\api\controllers
 * Управление иелеметрией через api
 */
class TelemetryController extends \yii\rest\Controller
{


    /**
     * @return ActiveDataProvider
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => \app\models\Telemetry::find()
        ]);


        return $dataProvider;
    }


    /**
     * @return Telemetry
     * @throws \yii\base\InvalidConfigException
     */
    public function actionCreate(){
        $data = Yii::$app->request->getBodyParams();

        $telemetry = new Telemetry();

        if($telemetry->load($data,'' ) && $telemetry->validate()){
            if($telemetry->save()){
                Yii::$app->response->setStatusCode(201);
            }
        }

        return $telemetry;
    }


    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::class,
        ];

        $behaviors['access'] = [
            'class' => AccessControl::class,
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ]
        ];

        return $behaviors;
    }

}
