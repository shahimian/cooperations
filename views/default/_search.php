<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model shahimian\cooperations\models\db\CooperationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="cooperations-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cooperationId') ?>

    <?= $form->field($model, 'firstName') ?>

    <?= $form->field($model, 'lastName') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'maritalStatus') ?>

    <?php // echo $form->field($model, 'militaryService') ?>

    <?php // echo $form->field($model, 'identifyNumber') ?>

    <?php // echo $form->field($model, 'publishedFrom') ?>

    <?php // echo $form->field($model, 'nationalNumber') ?>

    <?php // echo $form->field($model, 'phoneNumber') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'fieldName') ?>

    <?php // echo $form->field($model, 'average') ?>

    <?php // echo $form->field($model, 'favoriteLesson') ?>

    <?php // echo $form->field($model, 'essentialApps') ?>

    <?php // echo $form->field($model, 'isUsedWorkteamApp') ?>

    <?php // echo $form->field($model, 'workteamAppsName') ?>

    <?php // echo $form->field($model, 'isFund') ?>

    <?php // echo $form->field($model, 'fundPrice') ?>

    <?php // echo $form->field($model, 'specialties') ?>

    <?php // echo $form->field($model, 'proposedSalary') ?>

    <?php // echo $form->field($model, 'attachmentResume') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
