<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "estados".
 *
 * @property integer $id_estados
 * @property string $nombre_estado
 *
 * @property Articulo[] $articulos
 */
class Estados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_estado'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_estados' => 'Id Estados',
            'nombre_estado' => 'Nombre Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticulos()
    {
        return $this->hasMany(Articulo::className(), ['id_estados' => 'id_estados']);
    }
}
