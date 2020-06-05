<?php

use app\modules\webSocket\assets\TelemetryAsset;

TelemetryAsset::register($this);
$this->title = 'Add new Telemetry';
$this->params['breadcrumbs'][] = $this->title;
?>


<h1>Введите телеметрию</h1>
<input type="text" name="message">
<ul id="messages"></ul>

