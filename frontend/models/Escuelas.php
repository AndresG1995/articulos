<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "escuelas".
 *
 * @property integer $id_escuela
 * @property string $nombre_escuela
 *
 * @property Articulo[] $articulos
 * @property Docentes[] $docentes
 */
class Escuelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'escuelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_escuela'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_escuela' => 'Id Escuela',
            'nombre_escuela' => 'Nombre Escuela',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticulos()
    {
        return $this->hasMany(Articulo::className(), ['id_escuela' => 'id_escuela']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocentes()
    {
        return $this->hasMany(Docentes::className(), ['id_escuela' => 'id_escuela']);
    }
}
