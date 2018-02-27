<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Habitaciones */

$this->title = 'Crear nueva Habitación';
$this->params['breadcrumbs'][] = ['label' => 'Habitaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="habitaciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Aquí puedes añadir una nueva habitación.
    </p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
