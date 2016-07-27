<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\enpii\components\widget\datepicker\DateRangePicker;
use backend\models\CodeBlockItem;

/**
 * SearchCodeBlockItem represents the model behind the search form about `backend\models\CodeBlockItem`.
 */
class SearchCodeBlockItem extends CodeBlockItem
{
    /**
    * @var $globalSearch
    */
    public $globalSearch;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['code', 'content'], 'safe'],
            [['globalSearch'],'safe'],
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
        $query = CodeBlockItem::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'content', $this->content]);

        if($this->globalSearch) {
            $query->filterWhere(['like','id', $this->globalSearch]);
            $query->orFilterWhere(['like','code', $this->globalSearch]);
            $query->orFilterWhere(['like','content', $this->globalSearch]);
        }

        return $dataProvider;
    }
}
