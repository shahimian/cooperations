<?php

namespace shahimian\cooperations\models;

use yii\validators\Validator;

class militaryServiceCondition extends Validator {
    public function validateAttribute($model, $attribute){
        if($model->gender == 0) {
            $this->addError($model, $attribute, 'error');
        }
    }
}