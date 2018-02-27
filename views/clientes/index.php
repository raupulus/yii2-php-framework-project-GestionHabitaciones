<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Cliente', ['create'], ['class' => 'btn 
        btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'nombre',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::a($data->nombre, ['clientes/view', 'id' => $data->id], ['class' => 'btn']);
                    //return $data->titulo;
                },
            ],
            [
                'attribute' => 'apellidos',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::a($data->apellidos, ['clientes/view', 'id' => $data->id], ['class' => 'btn']);
                    //return $data->titulo;
                },
            ],
            'dni',
            'sexo',
            'fecha_naci:date',
            //'pais',
            'provincia',
            //'ciudad',
            //'cod_postal',
            //'direccion',
            'telefono',
            'observacion:ntext',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
