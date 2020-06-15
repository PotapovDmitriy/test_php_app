<?php


namespace app\modules\admin\controllers;


use app\models\User;
use app\modules\admin\models\AddUserForm;
use app\modules\admin\models\RegForm;
use Yii;
use yii\web\Controller;

class AddUserController extends Controller
{
    public function actionShow(){
        return $this->render('addUserView', ['model' => new AddUserForm()]);
    }

    public function actionAdd(){

        $form_model = new AddUserForm();
        if($form_model->load(\Yii::$app->request->post()) && $form_model->add()){
            return $this->render('addUserView', ['model' => new AddUserForm()]);
        }

        return $this->render('addUserView', ['model' => $form_model]);
    }
}