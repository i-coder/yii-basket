
<?php
use yii\helpers\Html;
?>
<div class="news-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <h1><a href="<?=\Yii::$app->urlManager->createUrl(['basket/default/profile/'])?>">Profile</a><br></h1>
    
    <?php
    foreach($tovar as $k=>$v){?>
    <?=$tovar[$k]['name']?>
        <a href="<?=\Yii::$app->urlManager->createUrl(['basket/default/order/','id'=>$tovar[$k]['id']] )?>">Send</a><br>
    <?php
    }
    ?>


</div>