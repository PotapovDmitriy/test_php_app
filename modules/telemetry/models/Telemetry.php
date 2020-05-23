<?php

namespace app\modules\telemetry\models;

use Yii;

/**
 * This is the model class for table "telemetry".
 *
 * @property int $id
 * @property mixed|null telemetry_string
 * @property false|mixed|string|null time
 */
class Telemetry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telemetry';
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['telemetry_string'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'time' => 'Time',
            'telemetry_string' => 'Telemetry_string',
        ];
    }


    /**
     * Find all telemetry metrics
     *
     *
     * @return Telemetry[]
     */
    public static function findAllTelemetry()
    {
        return self::find()->all();
    }


    /**
     * Add new user to database
     * @param $telemetry_string
     */

    public static function addTelemetry($telemetry_string)
    {
        $currentW = new Telemetry();
        $currentW->id = null;
        $currentW->time = date("l dS of F Y h:I:s A");
        $currentW->telemetry_string = $telemetry_string;
        $currentW->save(false);
    }
}
