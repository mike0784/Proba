<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "publication".
 *
 * @property int $id
 * @property string $namepublic
 * @property string $subject
 * @property int $created_at
 * @property int $updated_at
 * @property string $namefile
 */
class Publication extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'publication';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'namepublic', 'subject', 'created_at', 'updated_at', 'namefile'], 'required'],
            [['id', 'created_at', 'updated_at'], 'integer'],
            [['namepublic', 'subject', 'namefile'], 'string', 'max' => 255],
            [['namepublic'], 'unique'],
            [['namefile'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namepublic' => 'Namepublic',
            'subject' => 'Subject',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'namefile' => 'Namefile',
        ];
    }
}
