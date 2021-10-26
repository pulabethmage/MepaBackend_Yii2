<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReportissueTbl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reportissue-tbl-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_nic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_lat')->textInput() ?>

    <?= $form->field($model, 'location_long')->textInput() ?>

    <?= $form->field($model, 'polution_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'more_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
