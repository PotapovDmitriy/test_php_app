<?php

use app\modules\webSocket\assets\TelemetryAsset;

TelemetryAsset::register($this);
$this->title = 'Add new Telemetry';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="app">
    Загрузка...
</div>


<h1>Введите телеметрию через вебсокет</h1>
<input type="text" name="message">
<ul id="messages"></ul>

