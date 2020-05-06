<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model shahimian\cooperations\models\db\Cooperations */
?>

<div class="cooperations-create">

    <?= $this->render('_form', [
        'model' => $model,
        'days' => $days,
        'months' => $months,
    ]) ?>

</div>
