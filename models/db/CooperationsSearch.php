<?php

namespace app\components\modules\cooperation\models\db;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\components\modules\cooperation\models\db\Cooperations;

/**
 * CooperationsSearch represents the model behind the search form about `app\components\modules\cooperation\models\db\Cooperations`.
 */
class CooperationsSearch extends Cooperations
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cooperationId', 'fundPrice', 'proposedSalary'], 'integer'],
            [['firstName', 'lastName', 'gender', 'maritalStatus', 'militaryService', 'identifyNumber', 'publishedFrom', 'nationalNumber', 'phoneNumber', 'email', 'fieldName', 'favoriteLesson', 'essentialApps', 'isUsedWorkteamApp', 'workteamAppsName', 'isFund', 'specialties', 'attachmentResume'], 'safe'],
            [['average'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Cooperations::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'cooperationId' => $this->cooperationId,
            'average' => $this->average,
            'fundPrice' => $this->fundPrice,
            'proposedSalary' => $this->proposedSalary,
        ]);

        $query->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'lastName', $this->lastName])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'birthDate', $this->birthDate])
            ->andFilterWhere(['like', 'maritalStatus', $this->maritalStatus])
            ->andFilterWhere(['like', 'militaryService', $this->militaryService])
            ->andFilterWhere(['like', 'identifyNumber', $this->identifyNumber])
            ->andFilterWhere(['like', 'publishedFrom', $this->publishedFrom])
            ->andFilterWhere(['like', 'nationalNumber', $this->nationalNumber])
            ->andFilterWhere(['like', 'phoneNumber', $this->phoneNumber])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'fieldName', $this->fieldName])
            ->andFilterWhere(['like', 'favoriteLesson', $this->favoriteLesson])
            ->andFilterWhere(['like', 'essentialApps', $this->essentialApps])
            ->andFilterWhere(['like', 'isUsedWorkteamApp', $this->isUsedWorkteamApp])
            ->andFilterWhere(['like', 'workteamAppsName', $this->workteamAppsName])
            ->andFilterWhere(['like', 'isFund', $this->isFund])
            ->andFilterWhere(['like', 'specialties', $this->specialties])
            ->andFilterWhere(['like', 'attachmentResume', $this->attachmentResume]);

        return $dataProvider;
    }
}
