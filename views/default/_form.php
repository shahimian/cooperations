<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model app\components\modules\cooperation\models\db\Cooperations */
/* @var $form yii\widgets\ActiveForm */

$this->registerJs("$('div.field-militaryService, div.fields-workteam-app, div.field-cooperations-fundprice').hide()", View::POS_END, 'military-service-hide');

$this->registerJs("$('#workteam-app input').change(function(){
    if($(this).val() == 'بله'){
        $('div.fields-workteam-app').slideDown();
    } else {
        $('div.fields-workteam-app').slideUp();
    }
});
$('#is-fund input').change(function(){
    if($(this).val() == 'بله'){
        $('div.field-cooperations-fundprice').slideDown();
    } else {
        $('div.field-cooperations-fundprice').slideUp();
    }
})", View::POS_END, 'condition-fields');
?>

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

    <div>حداکثر 5 مورد از نرم افزارهایی که برای رشته تخصصی خود ضرورت میدانید نام ببرید:</div>

    <?php for($i = 0; $i < 5; $i++): ?>
    <?= $form->field($model, "[$i]essentialApp")->textInput() ?>
    <?= $form->field($model, "[$i]essentialAppDegree")->radioList(['خوب', 'متوسط', 'عالی']) ?>
    <?php endfor; ?>

    <?= $form->field($model, 'isUsedWorkteamApp')->radioList([ 'خیر' => 'خیر', 'بله' => 'بله', ], ['id' => 'workteam-app']) ?>

    <div class="fields-workteam-app">

        <div>حداکثر 5 مورد از آنها را نام ببرید:</div>

        <?php for($i = 0; $i < 5; $i++): ?>
        <?= $form->field($model, "[$i]workteamAppName")->textInput() ?>
        <?= $form->field($model, "[$i]workteamAppDegree")->radioList(['متوسط', 'خوب', 'عالی']) ?>
        <?php endfor; ?>

    </div>

    <?= $form->field($model, 'isFund')->radioList([ 'خیر' => 'خیر', 'بله' => 'بله', ], ['id' => 'is-fund']) ?>

    <?= $form->field($model, 'fundPrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'specialties[]')->checkboxList([
        'برنامه نویسی' => 'برنامه نویسی',
        'ایده پردازی' => 'ایده پردازی',
        'داستان نویسی' => 'داستان نویسی',
        'کارگردانی' => 'کارگردانی',
        'طراحی گرافیک' => 'طراحی گرافیک',
        'گرافیک سه بعدی' => 'گرافیک سه بعدی']) ?>

    <?= $form->field($model, 'proposedSalary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attachmentResume')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'ثبت همکاری' : 'بروز رسانی همکاری', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
