<?php

//namespace app\models;
namespace frontend\models;

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
            [['id', 'created_at'], 'integer'],
            [['accesstoken', 'textpublication'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'accesstoken' => 'accessToken',
            'textpublication' => 'TextPublication',
            'created_at' => 'Created At',
        ];
    }
}
