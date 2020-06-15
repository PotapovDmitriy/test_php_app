<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Admin Page';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>



    <a href="http://localhost:8500/admin/add-user/show">Добавить нового пользователя</a>

    <?php $form = ActiveForm::begin([
        'id' => 'banned-form',
        'action' => ['admin/banned'],
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'banned')->textInput() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11", href="http://localhost:8500/admin/admin/show">
            <?= Html::submitButton('БАН', ['class' => 'btn btn-primary', 'name' => 'ban-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

    <p>
        Это список всех пользователей
    </p>

    <?php
    echo GridView::widget([
        'dataProvider' => $data,
    ]);
    ?>
</div>