<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Habitaciones */

$this->title = 'Actualizar Habitación '.$model->numero;
$this->params['breadcrumbs'][] = ['label' => 'Habitaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Habitación '.$model->numero, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="habitaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
