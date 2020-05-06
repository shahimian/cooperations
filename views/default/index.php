<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel shahimian\cooperations\models\db\CooperationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cooperations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cooperations-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cooperations', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cooperationId',
            'firstName',
            'lastName',
            'gender',
            'maritalStatus',
            // 'militaryService',
            // 'identifyNumber',
            // 'publishedFrom',
            // 'nationalNumber',
            // 'phoneNumber',
            // 'email:email',
            // 'fieldName',
            // 'average',
            // 'favoriteLesson',
            // 'essentialApps:ntext',
            // 'isUsedWorkteamApp',
            // 'workteamAppsName:ntext',
            // 'isFund',
            // 'fundPrice',
            // 'specialties:ntext',
            // 'proposedSalary',
            // 'attachmentResume',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
