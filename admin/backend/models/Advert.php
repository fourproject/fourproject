<?php

namespace backend\models;
use yii\web\UploadedFile;
use Yii;
/**
 * This is the model class for table "Advert".
 *
 * @property integer $a_id
 * @property string $a_title
 * @property string $a_img
 * @property string $a_show
 * @property string $a_order
 */
class Advert extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Advert';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a_title', 'a_img', 'a_show', 'a_order'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'a_id' => 'A ID',
            'a_title' => 'A Title',
            'a_img' => 'A Img',
            'a_show' => 'A Show',
            'a_order' => 'A Order',
        ];
    }
	public function upload()
    {
       
         return $this->a_img->saveAs('upload/' . $this->a_img->baseName . '.' . $this->a_img->extension);
            
       
    }

}
