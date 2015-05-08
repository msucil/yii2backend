<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Menu;

/**
 * MenuSearch represents the model behind the search form about `common\models\Menu`.
 */
class MenuSearch extends Menu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_id', 'category_id', 'parent_menu', 'menu_type_id', 'menu_order'], 'integer'],
            [['menu_name'], 'safe'],
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
        $query = Menu::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'menu_id' => $this->menu_id,
            'category_id' => $this->category_id,
            'parent_menu' => $this->parent_menu,
            'menu_type_id' => $this->menu_type_id,
            'menu_order' => $this->menu_order,
        ]);

        $query->andFilterWhere(['like', 'menu_name', $this->menu_name]);

        return $dataProvider;
    }
}
