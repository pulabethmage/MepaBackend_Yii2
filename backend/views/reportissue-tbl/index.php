<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReportissueTblSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reportissue Tbls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reportissue-tbl-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Reportissue Tbl', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_nic',
            'image_url:url',
            'location_lat',
            'location_long',
            //'polution_type',
            //'more_info',
            //'date_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
