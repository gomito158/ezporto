<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ps_custom_customer".
 *
 * @property integer $idcedula
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property string $email
 * @property string $telefono
 * @property string $celular
 *
 * @property PsUsers[] $psUsers
 */
class CustomCustomer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ps_custom_customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcedula', 'nombre', 'apellido', 'direccion', 'email', 'telefono', 'celular'], 'required'],
            [['idcedula'], 'integer'],
            [['nombre', 'apellido', 'direccion'], 'string', 'max' => 50],
            [['email', 'telefono', 'celular'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcedula' => Yii::t('app', 'Idcedula'),
            'nombre' => Yii::t('app', 'Nombre'),
            'apellido' => Yii::t('app', 'Apellido'),
            'direccion' => Yii::t('app', 'Direccion'),
            'email' => Yii::t('app', 'Email'),
            'telefono' => Yii::t('app', 'Telefono'),
            'celular' => Yii::t('app', 'Celular'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPsUsers()
    {
        return $this->hasMany(PsUsers::className(), ['idcedula' => 'idcedula']);
    }
}
