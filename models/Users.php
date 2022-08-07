<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users_table".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $info
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users_table';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'info'], 'required'],
            [['info'], 'string'],
            [['username'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 32],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'info' => 'Info',
        ];
    }
}
