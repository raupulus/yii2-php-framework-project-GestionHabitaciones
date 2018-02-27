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
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'numero',
            [
                'attribute' => 'numero',
                'contentOptions' => [
                    'class' => 'text-center',
                    'style'=>'width: 20px; color: #f00; font-size: 1.4em',
                ],
            ],
            'nombre',
            'descripcion:ntext',
            'precio_base:currency',
            //'disponible',
            [
                'label' => 'Disponible',
                'format' => 'raw',

                // En la función → $model vale el 'id' y $key la posición
                'value' => function($model, $key) {
                    if($model->estalibre()){
                        return 'Si';
                    }
                    return 'No';
                },
                'contentOptions' => [
                    'class' => 'text-center',
                    'style'=>'width: 20px; color: #f00; font-size: 1.4em',
                ],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
