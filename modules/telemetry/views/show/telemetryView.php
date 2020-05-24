<?php

///* @var $this yii\web\View */
/* @var $this yii\web\View */

/* @var $model app\modules\telemetry\models\Telemetry */

use app\modules\telemetry\models\Telemetry;
use yii\helpers\Html;

$this->title = 'Telemetry';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Telemetry page.
    </p>

    <table border="2px" cellpadding="10">
        <tr>
            <td>Time</td>
            <td>Telemetry</td>
        </tr>
        <?php
        foreach ($data as $row): ?>
            <tr>
                <td>  <?php echo $row->time; ?>  </td>
                <td>  <?php echo $row->telemetry_string; ?>  </td>
            </tr>
        <?php endforeach; ?>
    </table>


</div>
