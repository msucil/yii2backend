<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Post;

/**
 * PostSearch represents the model behind the search form about `common\models\Post`.
 */
class PostSearch extends Post
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'status_id', 'featured_post', 'main_page', 'user_id', 'category_id'], 'integer'],
            [['post_title', 'created_at'], 'safe'],
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
        $query = Post::find();

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
//            'post_id' => $this->post_id,
            'status_id' => $this->status_id,
            'featured_post' => $this->featured_post,
//            'main_page' => $this->main_page,
            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
        ]);

        $query->andFilterWhere(['like', 'post_title', $this->post_title]);
//            ->andFilterWhere(['like', 'slug', $this->slug])
//            ->andFilterWhere(['like', 'post_content', $this->post_content])
//            ->andFilterWhere(['like', 'meta_tags', $this->meta_tags])
//            ->andFilterWhere(['like', 'meta_desc', $this->meta_desc])
//            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
