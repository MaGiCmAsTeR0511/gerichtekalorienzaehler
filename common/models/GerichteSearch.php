<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Gerichte;

/**
 * GerichteSearch represents the model behind the search form of `common\models\Gerichte`.
 */
class GerichteSearch extends Gerichte
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['g_id', 'g_sig_id'], 'integer'],
            [['g_name', 'g_beschreibung', 'g_sig_datum'], 'safe'],
            [['g_fett', 'g_eiweiß', 'g_kohlenhydrate', 'g_kalorien'], 'number'],
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
        $query = Gerichte::find();

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
            'g_id' => $this->g_id,
            'g_fett' => $this->g_fett,
            'g_eiweiß' => $this->g_eiweiß,
            'g_kohlenhydrate' => $this->g_kohlenhydrate,
            'g_kalorien' => $this->g_kalorien,
            'g_sig_datum' => $this->g_sig_datum,
            'g_sig_id' => $this->g_sig_id,
        ]);

        $query->andFilterWhere(['like', 'g_name', $this->g_name])
            ->andFilterWhere(['like', 'g_beschreibung', $this->g_beschreibung]);

        return $dataProvider;
    }
}
