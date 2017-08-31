<?php

namespace coderept\basket\models;

use Yii;
use yii\base\Model;


class Basket extends \yii\db\ActiveRecord
{
    
    public function rules()
    {
        return [];
    }
    
    public function attributeLabels()
    {
        return [
            'body' => Yii::t('app', 'Номер'),
        ];
    }
    
   
}