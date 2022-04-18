<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "reward".
 *
 * @property int $reward_id
 * @property string $reward_num
 */
class Reward extends \yii\db\ActiveRecord
{
    public $password;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reward';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
           
            [['reward_num'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reward_id' => 'Reward ID',
            'reward_num' => 'Reward Num',
        ];
    }
}
