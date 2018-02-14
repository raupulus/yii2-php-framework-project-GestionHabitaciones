<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Reservas */

$this->title = $model->habitaciones_id;
$this->params['breadcrumbs'][] = ['label' => 'Reservas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'habitaciones_id' => $model->habitaciones_id, 'fecha_entrada' => $model->fecha_entrada, 'fecha_salida' => $model->fecha_salida], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'habitaciones_id' => $model->habitaciones_id, 'fecha_entrada' => $model->fecha_entrada, 'fecha_salida' => $model->fecha_salida], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'habitaciones_id',
            'fecha_entrada',
            'fecha_salida',
            'clientes_id',
            'precio',
            'observacion:ntext',
        ],
    ]) ?>

</div>
