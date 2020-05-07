<?php

/* @var $this yii\web\View */
/* @var $model app\models\Telemetry */

use app\models\Telemetry;
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
            <td class="cell">Имя</td>
            <td>Рост</td>
            <td>Вес</td>
        </tr>
        <?php $rows =  Telemetry::findAllTelemetry();
        foreach ($rows as $row): ?>
            <tr> <td>  <?php echo $row->name; ?>  </td>   <td>  <?php echo $row->height; ?>  </td>  <td>  <?php echo $row->weight; ?>  </td> </tr>
        <?php endforeach; ?>
    </table>


</div>
