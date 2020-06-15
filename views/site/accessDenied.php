<?php

/* @var $this yii\web\View */

/* @var $message string */


use yii\helpers\Html;

$this->title = 'Access denied';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-accessDenied">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        У вас нет разрешения на посещение данной страницы.
    </p>


</div>
