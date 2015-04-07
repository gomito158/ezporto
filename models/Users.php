<?php
 //modelo encargado de retornar el nombre de la tabla de usuarios: ps_users
namespace app\models;
use Yii;
use yii\db\ActiveRecord;
 
class Users extends ActiveRecord{
     
    public static function getDb()
    {
        return Yii::$app->db;
    }
     
    public static function tableName()
    {
        return 'ps_users';
    }
     
}