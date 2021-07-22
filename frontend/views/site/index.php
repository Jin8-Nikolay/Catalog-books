<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'author',
            'co_author:ntext',
            'name',
            'short_description:ntext',
            //'date',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '',
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
</div>
