<?php

namespace app\models;

use yii\db\ActiveRecord;


class QueueStatuses extends ActiveRecord
{

    public function attributes()
    {
        return [
            'id',
            'c_id',
            'c_name',
            'c_state',
            's_name',
            'a_type',
            'direction',
            'activation',
            'control'
        ];
    }


    public function rules()
    {
        return [
            [['c_id', 'string', 'max' => 32],'required'],
            ['c_name', 'string', 'max' => 512],
            ['c_state', 'string', 'max' => 32],
            ['s_name', 'string', 'max' => 512],
            ['a_type', 'string', 'max' => 128],
            ['direction', 'string', 'max' => 32],
            ['activation', 'string', 'max' => 32],
            ['control', 'string', 'max' => 32]
        ];
    }

    public function scenarios()
    {
        return [
            'default' => [
                'id',
                'c_id',
                'c_name',
                'c_state',
                's_name',
                'a_type',
                'direction',
                'activation',
                'control'
            ],
        ];
    }

}