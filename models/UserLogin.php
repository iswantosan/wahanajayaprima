<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_login".
 *
 * @property integer $id
 * @property string $username
 * @property string $tanggal
 */
class UserLogin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_login';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['username'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'tanggal' => 'Tanggal',
        ];
    }
}
