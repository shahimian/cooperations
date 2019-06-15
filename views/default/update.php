<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\components\modules\cooperation\models\db\Cooperations */

$this->title = 'Update Cooperations: ' . $model->cooperationId;
$this->params['breadcrumbs'][] = ['label' => 'Cooperations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cooperationId, 'url' => ['view', 'id' => $model->cooperationId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cooperations-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
