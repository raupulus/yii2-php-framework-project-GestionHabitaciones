<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReservasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reservas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nueva Reserva', ['create'], ['class' => 'btn 
        btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'id',
                'contentOptions' => [
                    'class' => 'text-center',
                    'style'=> 'width: 10px; color: #f00; font-size: 1.2em;',
                ],
            ],
            [
                'label' => 'Nº Hab.',
                'format' => 'raw',
                'value' => function ($data) {
                $habitacion = \app\models\Habitaciones::findOne($data->habitaciones_id);

                return Html::a($habitacion->numero, ['habitaciones/view', 'id' => $habitacion->id]);
                },
                'contentOptions' => [
                    'class' => 'text-center',
                    'style'=> 'width: 10px; color: #f00; font-size: 1.2em;',
                ],
            ],
            [
                'label' => 'Cliente',
                'format' => 'raw',
                'value' => function ($data) {
                    $usuario = \app\models\Clientes::findOne
                    ($data->clientes_id);

                    return Html::a($usuario->nombre, ['clientes/view', 'id' => $usuario->id]);
                },
                'contentOptions' => [
                    'class' => 'text-center',
                    'style'=> 'width: 10px; font-size: 1.2em;',
                ],
            ],
            'precio:currency',
            'fecha_entrada:date',
            'fecha_salida:date',
            //'observacion:ntext',
        ],
    ]); ?>
</div>
