<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property string $name
 * @property string $werter
 * @property string $time
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['time'], 'safe'],
            [['name', 'werter'], 'string', 'max' => 20],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'werter' => 'Werter',
            'time' => 'Time',
        ];
    }
}
