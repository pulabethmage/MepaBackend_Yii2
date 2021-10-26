<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "reportissue_tbl".
 *
 * @property int $id
 * @property string $user_nic
 * @property string $image_url
 * @property double $location_lat
 * @property double $location_long
 * @property string $polution_type
 * @property string $more_info
 * @property string $date_time
 */
class ReportissueTbl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reportissue_tbl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_nic', 'image_url', 'location_lat', 'location_long', 'polution_type', 'more_info', 'date_time'], 'required'],
            [['location_lat', 'location_long'], 'number'],
            [['date_time'], 'safe'],
            [['user_nic'], 'string', 'max' => 30],
            [['image_url', 'polution_type', 'more_info'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_nic' => 'User Nic',
            'image_url' => 'Image Url',
            'location_lat' => 'Location Lat',
            'location_long' => 'Location Long',
            'polution_type' => 'Polution Type',
            'more_info' => 'More Info',
            'date_time' => 'Date Time',
        ];
    }
}
