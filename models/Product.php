<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ezp_product".
 *
 * @property integer $id_product
 * @property string $nombre_producto
 * @property string $referencia
 * @property string $descripcion1
 * @property string $descripcion2
 * @property string $precioMayoristaSinIva
 * @property string $precioAlMenorSinIva
 * @property string $impuesto
 * @property string $precioVentaConIva
 * @property integer $CantidadStock
 * @property string $imagen1
 * @property string $imagen2
 * @property string $imagen3
 * @property string $imagen4
 * @property string $imagen5
 * @property integer $fk_id_section
 * @property integer $fk_id_category
 * @property integer $fk_id_subcategory
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ezp_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_producto', 'precioMayoristaSinIva', 'precioAlMenorSinIva', 'impuesto', 'precioVentaConIva', 'CantidadStock', ], 'required'],
            [['descripcion1', 'descripcion2'], 'string'],
            [['precioMayoristaSinIva', 'precioAlMenorSinIva', 'impuesto', 'precioVentaConIva'], 'number'],
            [['CantidadStock'], 'integer'],
            [['nombre_producto', ], 'string', 'max' => 128],
            [['referencia'], 'string', 'max' => 32],
            [['imagen1', 'imagen2', 'imagen3', 'imagen4', 'imagen5'], 'safe'],
        	[['imagen1', 'imagen2', 'imagen3', 'imagen4', 'imagen5'], 'file', 'extensions'=>'jpg, gif, png'],
        		
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_product' => Yii::t('app', 'Id Product'),
            'nombre_producto' => Yii::t('app', 'Nombre Producto'),
            'referencia' => Yii::t('app', 'Referencia'),
            'descripcion1' => Yii::t('app', 'Descripcion1'),
            'descripcion2' => Yii::t('app', 'Descripcion2'),
            'precioMayoristaSinIva' => Yii::t('app', 'Precio Mayorista Sin Iva'),
            'precioAlMenorSinIva' => Yii::t('app', 'Precio Al Menor Sin Iva'),
            'impuesto' => Yii::t('app', 'Impuesto'),
            'precioVentaConIva' => Yii::t('app', 'Precio Venta Con Iva'),
            'CantidadStock' => Yii::t('app', 'Cantidad Stock'),
            'imagen1' => Yii::t('app', 'Imagen1'),
            'imagen2' => Yii::t('app', 'Imagen2'),
            'imagen3' => Yii::t('app', 'Imagen3'),
            'imagen4' => Yii::t('app', 'Imagen4'),
            'imagen5' => Yii::t('app', 'Imagen5'),
            'fk_id_section' => Yii::t('app', 'Fk Id Section'),
            'fk_id_category' => Yii::t('app', 'Fk Id Category'),
            'fk_id_subcategory' => Yii::t('app', 'Fk Id Subcategory'),
        ];
    }
    
    
}
