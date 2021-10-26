<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AppUserTbl;

/**
 * AppuserSearch represents the model behind the search form of `backend\models\AppUserTbl`.
 */
class AppuserSearch extends AppUserTbl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['User_id', 'MobileNo', 'LogStatus'], 'integer'],
            [['NicNo', 'Password', 'FullName', 'Email', 'Address'], 'safe'],
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
        $query = AppUserTbl::find();

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
            'User_id' => $this->User_id,
            'MobileNo' => $this->MobileNo,
            'LogStatus' => $this->LogStatus,
        ]);

        $query->andFilterWhere(['like', 'NicNo', $this->NicNo])
            ->andFilterWhere(['like', 'Password', $this->Password])
            ->andFilterWhere(['like', 'FullName', $this->FullName])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Address', $this->Address]);

        return $dataProvider;
    }
}
