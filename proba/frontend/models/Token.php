<?php

//namespace app\models;
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "token".
 *
 * @property int $id
 * @property int|null $iduser
 * @property string|null $accesstoken
 */
class Token extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'token';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iduser'], 'integer'],
            [['accesstoken'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'iduser' => 'Iduser',
            'accesstoken' => 'Accesstoken',
        ];
    }
}
