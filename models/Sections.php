<?php

namespace app\models;

use Yii;
use app\models\Product;

/**
 * This is the model class for table "ezp_sections".
 *
 * @property integer $id_section
 * @property string $nombre_seccion
 * @property string $descripcion
 */
class Sections extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ezp_sections';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_seccion', 'descripcion'], 'required'],
            [['descripcion'], 'string'],
            [['nombre_seccion'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_section' => Yii::t('app', 'Id Section'),
            'nombre_seccion' => Yii::t('app', 'Nombre Seccion'),
            'descripcion' => Yii::t('app', 'Descripcion'),
        ];
    }

    
}
