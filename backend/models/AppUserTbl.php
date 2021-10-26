<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "app_user_tbl".
 *
 * @property int $User_id
 * @property string $NicNo
 * @property string $Password
 * @property string $FullName
 * @property string $Email
 * @property int $MobileNo
 * @property string $Address
 * @property int $LogStatus
 */
class AppUserTbl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_user_tbl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['User_id', 'NicNo', 'Password', 'FullName', 'Email', 'MobileNo', 'Address', 'LogStatus'], 'required'],
            [['User_id', 'MobileNo', 'LogStatus'], 'integer'],
            [['NicNo'], 'string', 'max' => 30],
            [['Password'], 'string', 'max' => 100],
            [['FullName', 'Email'], 'string', 'max' => 200],
            [['Address'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'User_id' => 'User ID',
            'NicNo' => 'Nic No',
            'Password' => 'Password',
            'FullName' => 'Full Name',
            'Email' => 'Email',
            'MobileNo' => 'Mobile No',
            'Address' => 'Address',
            'LogStatus' => 'Log Status',
        ];
    }
}
