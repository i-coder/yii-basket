<?php
use yii\grid\GridView;
/**
 * Created by PhpStorm.
 * User: coder.ept
 * Date: 30.08.2017
 * Time: 13:25
 */
?>

<?= GridView::widget([
    'dataProvider' => $order,
    'columns' => [
        'id',
        'basket_id',
        'user_id',
    ],
]) ?>