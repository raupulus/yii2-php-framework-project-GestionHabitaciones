<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reservas */

$this->title = 'Actualizar Reservaa '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Reservas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->habitaciones_id, 'url' => ['view', 'habitaciones_id' => $model->habitaciones_id, 'fecha_entrada' => $model->fecha_entrada, 'fecha_salida' => $model->fecha_salida]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reservas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
