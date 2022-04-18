<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Reward;


/**
 * RewardSearch represents the model behind the search form of `frontend\models\Reward`.
 */
class RewardSearch extends Reward
{
    /**
     * {@inheritdoc}
     */
    public $result;
    
    public function rules()
    {
        return [
            [['reward_id'], 'integer'],
            [['reward_num'], 'safe'],
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
        $query = Reward::find();

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
            'reward_id' => $this->reward_id,
        ]);

        $query->andFilterWhere(['like', 'reward_num', $this->reward_num]);

        return $dataProvider;
    }
    
}
$roll = rand(1,3);
$unit = array_merge(range(0,9));
shuffle($unit);
$result = implode(array_slice($unit, 0,$roll));
echo $result;
