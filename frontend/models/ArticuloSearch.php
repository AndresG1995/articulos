<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Articulo;

/**
 * ArticuloSearch represents the model behind the search form about `frontend\models\Articulo`.
 */
class ArticuloSearch extends Articulo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_articulo', 'id_escuela', 'id_estados', 'id_categoria'], 'integer'],
            [['nombre_articulo', 'Url', 'descripcion', 'ciudad', 'fecha_creacion', 'fehca_revision', 'fecha_publicacion'], 'safe'],
            [['puntaje_articulo'], 'number'],
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
        $query = Articulo::find();

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
            'id_articulo' => $this->id_articulo,
            'puntaje_articulo' => $this->puntaje_articulo,
            'fecha_creacion' => $this->fecha_creacion,
            'fehca_revision' => $this->fehca_revision,
            'fecha_publicacion' => $this->fecha_publicacion,
            'id_escuela' => $this->id_escuela,
            'id_estados' => $this->id_estados,
            'id_categoria' => $this->id_categoria,
        ]);

        $query->andFilterWhere(['like', 'nombre_articulo', $this->nombre_articulo])
            ->andFilterWhere(['like', 'Url', $this->Url])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'ciudad', $this->ciudad]);

        return $dataProvider;
    }
}
