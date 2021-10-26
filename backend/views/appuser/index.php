<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AppuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'App User Tbls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-user-tbl-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create App User Tbl', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'User_id',
            'NicNo',
            'Password',
            'FullName',
            'Email:email',
            //'MobileNo',
            //'Address',
            //'LogStatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
