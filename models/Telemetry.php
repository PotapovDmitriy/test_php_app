<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telemetry".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $height
 * @property int|null $weight
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
            [['height', 'weight'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'height' => 'Height',
            'weight' => 'Weight',
        ];
    }

    /**
     * Finds info by name
     *
     * @param string $name
     * @return static|null
     */
    public static function findByUsername($name)
    {
        return self::findOne(['telemetry.name' => $name]);
    }

    /**
     * Finds user by username
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
     * @param string $name ,
     *
     * @param string $height
     * @param string $weight
     */

    public static function addTelemetry($name, $height, $weight)
    {
        $currentW = new Telemetry();
        $currentW->id = null;
        $currentW->name = $name;
        $currentW->weight = $weight;
        $currentW->height = $height;
        $currentW->save(false);
    }
}
