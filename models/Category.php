<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ezp_category".
 *
 * @property string $id_category
 * @property integer $fk_id_section
 * @property string $date_add
 * @property string $date_upd
 * @property string $nombre_categoria
 * @property string $descripcion
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ezp_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'date_add', 'date_upd', 'nombre_categoria', 'descripcion'], 'required'],
            [[ 'fk_id_section'], 'integer'],
            [['date_add', 'date_upd'], 'safe'],
            [['descripcion'], 'string'],
            [['nombre_categoria'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_category' => Yii::t('app', 'Id Category'),
            'fk_id_section' => Yii::t('app', 'Fk Id Section'),
            'date_add' => Yii::t('app', 'Date Add'),
            'date_upd' => Yii::t('app', 'Date Upd'),
            'nombre_categoria' => Yii::t('app', 'Nombre Categoria'),
            'descripcion' => Yii::t('app', 'Descripcion'),
        ];
    }
    
    /*funciones custom*/
  
}
