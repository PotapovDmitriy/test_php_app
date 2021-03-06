<?php

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AddUserForm; */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'add user page';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="AddUser">
    <h1>Страница добавления нового пользователя</h1>

    <p>Заполните поля:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'reg-form',
        'action' => ['add-user/add'],
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->textInput() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11", href="http://localhost:8500/admin/admin/show">
            <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
