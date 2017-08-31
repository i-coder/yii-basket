<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">
    
    <?php $form = ActiveForm::begin(); ?>
    
    <!--    --><?//= $form->field($model, 'created_at')->textInput() ?>
    <!---->
    <!--    --><?//= $form->field($model, 'updated_at')->textInput() ?>
    <?= $form->field($model, 'body')->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton('Create', ['btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>