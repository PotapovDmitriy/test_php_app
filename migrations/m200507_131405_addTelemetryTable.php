<?php

use yii\db\Migration;

/**
 * Class m200507_131405_addTelemetryTable
 */
class m200507_131405_addTelemetryTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('telemetry', [
            'id' => $this->primaryKey(),
            'time' => $this->string(),
            'telemetry_string' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('telemetry');
    }
}
