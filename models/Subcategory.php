<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ezp_subcategory".
 *
 * @property integer $id_subcategory
 * @property integer $fk_id_category
 * @property string $nombre_categoria
 * @property string $descripcion
 */
class Subcategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ezp_subcategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fk_id_category'], 'integer'],
            [['nombre_subcategoria', 'descripcion'], 'required'],
            [['descripcion'], 'string'],
            [['nombre_subcategoria'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_subcategory' => Yii::t('app', 'Id Subcategory'),
            'fk_id_category' => Yii::t('app', 'Fk Id Category'),
            'nombre_subcategoria' => Yii::t('app', 'Nombre subCategoria'),
            'descripcion' => Yii::t('app', 'Descripcion'),
        ];
    }
    
    /*funciones custom**/

}
