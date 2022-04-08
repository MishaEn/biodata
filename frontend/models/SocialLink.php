<?php


namespace frontend\models;


use common\models\User;
use yii\db\ActiveRecord;

class SocialLink extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%social_link}}';
    }

    public function rules()
    {
        return [
            [['user_id', 'source', 'source_id'], 'required'],
            ['user_id', 'integer'],
            [['source', 'source_id'], 'string', 'max'=>255],
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}