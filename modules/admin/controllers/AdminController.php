<?php


namespace app\modules\admin\controllers;

use app\models\User;
use app\modules\admin\models\BannedForm;
use yii\web\Controller;

class AdminController extends Controller
{
    private function getDataProvider()
    {
        return new \yii\data\ActiveDataProvider([
            'query' => \app\models\User::find()
        ]);
    }

    public function actionShow()
    {

        if (!\Yii::$app->user->can('viewAdminPage')) {
            return $this->render('@app/views/site/accessDenied');
        }

        $dataProvider = $this->getDataProvider();

        return $this->render('adminView', ['data' => $dataProvider, 'model' => new BannedForm()]);
    }

    public function actionBanned()
    {


        if (!\Yii::$app->user->can('viewAdminPage')) {
            return $this->render('@app/views/site/accessDenied');
        }

        $dataProvider = $this->getDataProvider();

        $form_model = new BannedForm();
        if ($form_model->load(\Yii::$app->request->post()) && $form_model->ban()) {
            return $this->render('adminView', ['model' => new BannedForm()]);
        }

        return $this->render('adminView', ['data' => $dataProvider, 'model' => $form_model]);
    }
}
