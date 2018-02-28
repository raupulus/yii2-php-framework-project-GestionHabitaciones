<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HabitacionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Habitaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="habitaciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Añadir Habitación', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'numero',
                'contentOptions' => [
                    'class' => 'text-center',
                    'style'=> 'width: 20px; color: #f00; font-size: 1.4em',
                ],
            ],
            [
                'attribute' => 'nombre',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::a($model->nombre, ['habitaciones/view', 'id' => $model->id]);
                },
                'contentOptions' => [
                    'class' => 'text-center',
                ],
            ],
            'descripcion:ntext',
            'precio_base:currency',
            /*
            [
                'attribute' => 'disponible',
                'format' => 'raw',
                'contentOptions' => [
                    'style'=> 'width: 130px; color: #f00; font-size: 1.1em',
                ],
            ],
            */
        ],
    ]); ?>
</div>
