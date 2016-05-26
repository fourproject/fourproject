<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "home".
 *
 * @property integer $h_id
 * @property string $l_id
 * @property string $h_address
 * @property string $h_type
 * @property string $h_basement
 * @property string $h_profile
 * @property string $h_toilet
 * @property string $h_num
 * @property string $h_area
 * @property string $h_alias
 * @property string $h_title
 * @property string $h_introduce
 * @property string $h_architecture
 * @property string $h_traffic
 * @property string $h_facilities
 * @property string $h_speak
 * @property string $h_picture
 * @property string $h_dayprice
 * @property string $h_deposit
 * @property string $h_begintime
 * @property string $h_stoptime
 * @property string $h_reception
 * @property string $h_sorttime
 * @property string $h_longtime
 * @property string $h_examine
 * @property string $h_other
 * @property integer $h_people
 * @property string $region_name
 */
class Home extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'home';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['h_people'], 'integer'],
            [['l_id', 'h_address', 'h_type', 'h_basement', 'h_profile', 'h_toilet', 'h_num', 'h_area', 'h_alias', 'h_title', 'h_introduce', 'h_architecture', 'h_traffic', 'h_facilities', 'h_speak', 'h_picture', 'h_dayprice', 'h_deposit', 'h_begintime', 'h_stoptime', 'h_reception', 'h_sorttime', 'h_longtime', 'h_examine', 'h_other', 'region_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'h_id' => 'H ID',
            'l_id' => 'L ID',
            'h_address' => 'H Address',
            'h_type' => 'H Type',
            'h_basement' => 'H Basement',
            'h_profile' => 'H Profile',
            'h_toilet' => 'H Toilet',
            'h_num' => 'H Num',
            'h_area' => 'H Area',
            'h_alias' => 'H Alias',
            'h_title' => 'H Title',
            'h_introduce' => 'H Introduce',
            'h_architecture' => 'H Architecture',
            'h_traffic' => 'H Traffic',
            'h_facilities' => 'H Facilities',
            'h_speak' => 'H Speak',
            'h_picture' => 'H Picture',
            'h_dayprice' => 'H Dayprice',
            'h_deposit' => 'H Deposit',
            'h_begintime' => 'H Begintime',
            'h_stoptime' => 'H Stoptime',
            'h_reception' => 'H Reception',
            'h_sorttime' => 'H Sorttime',
            'h_longtime' => 'H Longtime',
            'h_examine' => 'H Examine',
            'h_other' => 'H Other',
            'h_people' => 'H People',
            'region_name' => 'Region Name',
        ];
    }
}
