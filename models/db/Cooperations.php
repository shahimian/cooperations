<?php

namespace shahimian\cooperations\models\db;

use Yii;
use shahimian\cooperations\models\militaryServiceCondition;

/**
 * This is the model class for table "cooperations".
 *
 * @property string $cooperationId
 * @property string $firstName
 * @property string $lastName
 * @property string $gender
 * @property date $birthDate
 * @property integer $year
 * @property integer $month
 * @property integer $day
 * @property string $maritalStatus
 * @property string $militaryService
 * @property string $identifyNumber
 * @property string $publishedFrom
 * @property string $nationalNumber
 * @property string $phoneNumber
 * @property string $email
 * @property string $fieldName
 * @property double $average
 * @property string $favoriteLesson
 * @property string $essentialApps
 * @property string $isUsedWorkteamApp
 * @property string $workteamAppsName
 * @property string $isFund
 * @property string $fundPrice
 * @property string $specialties
 * @property string $proposedSalary
 * @property resource $attachmentResume
 */
class Cooperations extends \yii\db\ActiveRecord
{
    public $year;
    public $month;
    public $day;

    public $essentialApp;
    public $essentialAppDegree;

    public $workteamAppName;
    public $workteamAppDegree;

    public $gender;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cooperations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gender'], 'required', 'whenClient' => "function(attribute, value){
                if(value == 0){
                    $('div.field-militaryService').slideDown();
                } else {
                    $('div.field-militaryService').slideUp();
                }
            }"],
            [['militaryService'], 'required', 'when' => function($model){
                return $model->gender == 0;
            }],
            [['maritalStatus', 'militaryService', 'essentialApps', 'isUsedWorkteamApp', 'workteamAppsName', 'isFund', 'specialties', 'attachmentResume'], 'string'],
            [['average'], 'number'],
            [['fundPrice', 'proposedSalary', 'year', 'month', 'day'], 'integer'],
            [['firstName', 'publishedFrom'], 'string', 'max' => 20],
            [['lastName', 'email'], 'string', 'max' => 40],
            [['identifyNumber', 'nationalNumber'], 'string', 'max' => 10],
            [['phoneNumber'], 'string', 'max' => 11],
            [['fieldName', 'favoriteLesson'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cooperationId' => 'شناسه همکاری',
            'firstName' => 'نام',
            'lastName' => 'نام خانوادگی',
            'gender' => 'جنسیت',
            'birthDate' => 'تاریخ تولد',
            'year' => 'سال',
            'month' => 'ماه',
            'day' => 'روز',
            'maritalStatus' => 'وضعیت تأهل',
            'militaryService' => 'وضعیت سربازی',
            'identifyNumber' => 'شماره شناسنامه',
            'publishedFrom' => 'صادره از',
            'nationalNumber' => 'شماره ملی',
            'phoneNumber' => 'شماره تلفن',
            'email' => 'ایمیل',
            'fieldName' => 'رشته دانشگاهی',
            'average' => 'معدل دانشگاه',
            'favoriteLesson' => 'در دانشگاه به چه درسی علاقه ی بیشتری داشته اید؟',
            'essentialApps' => 'نرم افزارهایی که برای رشته ی تخصصی خود ضرورت میدانید، نام ببرید؟',
            'isUsedWorkteamApp' => 'آیا با نرم افزارهای تیمی کار کرده اید؟',
            'workteamAppsName' => 'نام نرم افزارهای تیمی',
            'isFund' => 'آیا مایل به سرمایه گذاری در این مجموعه هستید؟',
            'fundPrice' => 'مبلغ سرمایه گذاری',
            'specialties' => 'رشته تخصصی برای همکاری',
            'proposedSalary' => 'حقوق پیشنهادی',
            'attachmentResume' => 'فایل رزومه',
            'essentialApp' => 'نام نرم افزار',
            'essentialAppDegree' => 'سطح تسلط',
            'workteamAppName' => 'نام نرم افزار',
            'workteamAppDegree' => 'سطح تسلط',
        ];
    }
}
