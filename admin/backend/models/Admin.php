<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property integer $a_id
 * @property string $a_name
 * @property string $a_userpwd
 * @property string $a_username
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a_name', 'a_userpwd', 'a_username'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'a_id' => 'A ID',
            'a_name' => 'A Name',
            'a_userpwd' => 'A Userpwd',
            'a_username' => 'A Username',
        ];
    }
}
