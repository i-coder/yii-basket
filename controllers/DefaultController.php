<?php

namespace coderept\basket\controllers;

use yii\web\Controller;

use coderept\basket\models\Order;
use coderept\basket\models\Basket;
use yii\data\ActiveDataProvider;
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        
        $tovar = [
            0=>[
                'id'=>1,
                'name'=>'Renders the index view for the module',
            ],
            1=>[
                'id'=>2,
                'name'=>'Default controller for the `basket` module',
            ],
            2=>[
                'id'=>3,
                'name'=>'Rnamespace app\modules\basket\controllers;',
            ],
            3=>[
                'id'=>4,
                'name'=>'Tthenamespace  controller fort controllers;',
            ],
        ];
        
        
        $model = new Basket();
        return $this->render('index', [
            'model' => $model,
            'tovar' => $tovar,
        ]);
        
    }
    public function actionOrder()
    {
        //все быстро на скорую руку без проверки и без exception
        $order = new Order();
        $order->user_id=1;//тут дергается Authи получаем ID ползователя
        $order->basket_id=\Yii::$app->request->get('id');
        if($order->save()){
            return $this->redirect(['/basket/default/']);
        }
    }
    
    public function actionProfile(){
        $query = Order::find()->where(['user_id' => 1]);
        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_ASC,
                ]
            ],
        ]);
        
        return $this->render('profile', [
            'order' => $provider,
        ]);
    }
    
}
