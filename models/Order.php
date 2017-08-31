<?php

namespace coderept\basket\models;

use Yii;
use yii\base\Model;


class Order extends \yii\db\ActiveRecord
{
    
    public function rules()
    {
        return [];
    }
    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'basket_id' => 'ID order',
            'user_id' => 'ID user',
        ];
    }
    
   
}