<?php

namespace backend\modules\field_default\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\field_default\models\FieldDefault;

/**
 * FieldDefaultSearch represents the model behind the search form about `backend\modules\field_default\models\FieldDefault`.
 */
class FieldDefaultSearch extends FieldDefault
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ads_field_id'], 'integer'],
            [['value'], 'safe'],
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
        $query = FieldDefault::find();

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
            'ads_field_id' => $this->ads_field_id,
        ]);

        $query->andFilterWhere(['like', 'value', $this->value]);

        return $dataProvider;
    }
}
