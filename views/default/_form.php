<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model shahimian\cooperations\models\db\Cooperations */
/* @var $form yii\widgets\ActiveForm */

$this->registerJs("$('div.field-militaryService, div.fields-workteam-app, div.field-cooperations-fundprice').hide()", View::POS_END, 'military-service-hide');
$this->title = 'فراخوانی جذب نیروی متخصص';
?>
<h1><?= Html::encode($this->title) ?></h1>
<div>شرکت شمیسا رایانه با شماره ثبت 40430 و با شماره ملی 14004384821 اقدام به جذب نیروی متخصص و خلاق در زمینه طراحی بازی کرده است. 
در جمع دوستانی که علاقه به همکاری با این مجموعه هستند، لطفاً رزومه ی خود را بصورت یک فایل zip کرده و فرم زیر را بر اساس رشته تخصصی خود پر نمایید.
لازم به توضیح است افرادی که مایل به همکاری دارند، الزاماً ساکن شیراز و بین سنین 22 تا 25 سال باشند. افراد دارای شرایط همکاری از روز اول مشمول بیمه این مجموعه قرار میگیرند. با تشکر</div>


<div class="cooperations-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'enctype' => 'multipart/form-data',
        ],
    ]); ?>

    <?= $form->field($model, 'firstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->radioList(['مرد', 'زن'], ['id' => 'gender']) ?>

    <?= $form->field($model, 'militaryService')->radioList(['معاف', 'دارای کارت پایان خدمت', 'مشمول نشده'], ['id' => 'militaryService']) ?>

    <div>تاریخ تولد</div>

    <?= $form->field($model, 'year')->dropDownList([1372, 1373, 1374, 1375]) ?>

    <?= $form->field($model, 'month')->dropDownList($months) ?>

    <?= $form->field($model, 'day')->dropDownList($days) ?>
    
    <?= $form->field($model, 'maritalStatus')->radioList(['مجرد', 'متأهل']) ?>

    <?= $form->field($model, 'identifyNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publishedFrom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationalNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phoneNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fieldName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'average')->textInput() ?>

    <?= $form->field($model, 'favoriteLesson')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isFund')->radioList([ 'خیر' => 'خیر', 'بله' => 'بله', ], ['id' => 'is-fund']) ?>

    <?= $form->field($model, 'fundPrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'specialties[]')->checkboxList([
        'برنامه نویسی' => 'برنامه نویسی',
        'گرافیک' => 'گرافیک',
    ]) ?>

    <?= $form->field($model, 'proposedSalary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attachmentResume')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'ثبت همکاری' : 'بروز رسانی همکاری', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
