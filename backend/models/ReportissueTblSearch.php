<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ReportissueTbl;

/**
 * ReportissueTblSearch represents the model behind the search form of `backend\models\ReportissueTbl`.
 */
class ReportissueTblSearch extends ReportissueTbl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['user_nic', 'image_url', 'polution_type', 'more_info', 'date_time'], 'safe'],
            [['location_lat', 'location_long'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = ReportissueTbl::find();

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
            'id' => $this->id,
            'location_lat' => $this->location_lat,
            'location_long' => $this->location_long,
            'date_time' => $this->date_time,
        ]);

        $query->andFilterWhere(['like', 'user_nic', $this->user_nic])
            ->andFilterWhere(['like', 'image_url', $this->image_url])
            ->andFilterWhere(['like', 'polution_type', $this->polution_type])
            ->andFilterWhere(['like', 'more_info', $this->more_info]);

        return $dataProvider;
    }
}
