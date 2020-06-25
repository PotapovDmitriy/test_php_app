<?php

namespace app\models;

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
     * @var mixed|null
     */
    private $telemetry;

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
     * @param bool $insert
     * @return bool
     */
    public function beforeSave($insert)
    {

        if (parent::beforeSave($insert)) {
            $this->time = date("l dS of F Y h:I:s A");
            return true;
        }
        return false;
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
}
