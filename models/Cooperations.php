<?php

namespace app\components\modules\cooperation\models;

use yii\db\Migration;

class Cooperations extends Migration {
    function up() {
        if($this->db->getTableSchema('cooperations') == false){
            $this->createTable('cooperations', [
                'cooperationId' => $this->bigPrimaryKey(),
                'firstName' => $this->string(20),
                'lastName' => $this->string(40),
                'gender' => "ENUM('مرد', 'زن')",
                'birthDate' => $this->date(),
                'maritalStatus' => "ENUM('مجرد', 'متأهل')",
                'militaryService' => "ENUM('معاف', 'دارای کارت پایان خدمت', 'مشمول نشده')",
                'identifyNumber' => $this->string(10),
                'publishedFrom' => $this->string(20),
                'nationalNumber' => $this->string(10),
                'phoneNumber' => $this->string(11),
                'email' => $this->string(40),
                'fieldName' => $this->string(50),
                'average' => $this->double(),
                'favoriteLesson' => $this->string(50),
                'essentialApps' => $this->text(),
                'isUsedWorkteamApp' => "ENUM('خیر', 'بله')",
                'workteamAppsName' => $this->text(),
                'isFund' => "ENUM('خیر', 'بله')",
                'fundPrice' => $this->bigInteger(),
                'specialties' => $this->text(),
                'proposedSalary' => $this->bigInteger(),
                'attachmentResume' => 'LONGBLOB'
            ]);
        }
        return parent::up();
    }
}