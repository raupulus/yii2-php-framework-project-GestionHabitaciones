<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */

$this->title = $model->apellidos.', '.$model->nombre;
$this->params['breadcrumbs'][] = [
        'label' => 'Listado de Clientes',
        'url' => ['index']
];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' =>
            'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro que deseas eliminar a '.
                    $model->apellidos.', '.$model->nombre,
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'apellidos',
            'dni',
            'sexo',
            'fecha_naci',
            'pais',
            'provincia',
            'ciudad',
            'cod_postal',
            'direccion',
            'telefono',
            'observacion:ntext',
        ],
    ]) ?>

</div>
