<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\components\modules\cooperation\models\db\Cooperations */

$this->title = $model->cooperationId;
$this->params['breadcrumbs'][] = ['label' => 'Cooperations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cooperations-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cooperationId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cooperationId], [
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
            'cooperationId',
            'firstName',
            'lastName',
            'gender',
            'maritalStatus',
            'militaryService',
            'identifyNumber',
            'publishedFrom',
            'nationalNumber',
            'phoneNumber',
            'email:email',
            'fieldName',
            'average',
            'favoriteLesson',
            'essentialApps:ntext',
            'isUsedWorkteamApp',
            'workteamAppsName:ntext',
            'isFund',
            'fundPrice',
            [
                'attribute' => 'specialties',
                'value' => implode(' - ', json_decode($model->specialties)),
            ],
            'proposedSalary',
            'attachmentResume',
        ],
    ]) ?>

</div>
