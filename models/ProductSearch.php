<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_product', 'CantidadStock', 'fk_id_section', 'fk_id_category', 'fk_id_subcategory'], 'integer'],
            [['nombre_producto', 'referencia', 'descripcion1', 'descripcion2', 'imagen1', 'imagen2', 'imagen3', 'imagen4', 'imagen5'], 'safe'],
            [['precioMayoristaSinIva', 'precioAlMenorSinIva', 'impuesto', 'precioVentaConIva'], 'number'],
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
        $query = Product::find();

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
            'id_product' => $this->id_product,
            'precioMayoristaSinIva' => $this->precioMayoristaSinIva,
            'precioAlMenorSinIva' => $this->precioAlMenorSinIva,
            'impuesto' => $this->impuesto,
            'precioVentaConIva' => $this->precioVentaConIva,
            'CantidadStock' => $this->CantidadStock,
            'fk_id_section' => $this->fk_id_section,
            'fk_id_category' => $this->fk_id_category,
            'fk_id_subcategory' => $this->fk_id_subcategory,
        ]);

        $query->andFilterWhere(['like', 'nombre_producto', $this->nombre_producto])
            ->andFilterWhere(['like', 'referencia', $this->referencia])
            ->andFilterWhere(['like', 'descripcion1', $this->descripcion1])
            ->andFilterWhere(['like', 'descripcion2', $this->descripcion2])
            ->andFilterWhere(['like', 'imagen1', $this->imagen1])
            ->andFilterWhere(['like', 'imagen2', $this->imagen2])
            ->andFilterWhere(['like', 'imagen3', $this->imagen3])
            ->andFilterWhere(['like', 'imagen4', $this->imagen4])
            ->andFilterWhere(['like', 'imagen5', $this->imagen5]);

        return $dataProvider;
    }
    
   
}
