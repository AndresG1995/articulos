<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "articulo".
 *
 * @property integer $id_articulo
 * @property string $nombre_articulo
 * @property string $Url
 * @property string $descripcion
 * @property string $puntaje_articulo
 * @property string $ciudad
 * @property string $fecha_creacion
 * @property string $fehca_revision
 * @property string $fecha_publicacion
 * @property integer $id_escuela
 * @property integer $id_estados
 * @property integer $id_categoria
 *
 * @property Escuelas $idEscuela
 * @property Estados $idEstados
 * @property ArticuloAutores[] $articuloAutores
 * @property Docentes[] $idAutores
 * @property ArticuloCategoria[] $articuloCategorias
 * @property Categoria[] $idCategoria1s
 */
class Articulo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articulo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['puntaje_articulo'], 'number'],
            [['fecha_creacion', 'fehca_revision', 'fecha_publicacion'], 'safe'],
            [['id_escuela', 'id_estados', 'id_categoria'], 'required'],
            [['id_escuela', 'id_estados', 'id_categoria'], 'integer'],
            [['nombre_articulo', 'descripcion', 'ciudad'], 'string', 'max' => 15],
            [['Url'], 'string', 'max' => 40],
            [['id_escuela'], 'exist', 'skipOnError' => true, 'targetClass' => Escuelas::className(), 'targetAttribute' => ['id_escuela' => 'id_escuela']],
            [['id_estados'], 'exist', 'skipOnError' => true, 'targetClass' => Estados::className(), 'targetAttribute' => ['id_estados' => 'id_estados']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_articulo' => 'Id Articulo',
            'nombre_articulo' => 'Nombre Articulo',
            'Url' => 'Url',
            'descripcion' => 'Descripcion',
            'puntaje_articulo' => 'Puntaje Articulo',
            'ciudad' => 'Ciudad',
            'fecha_creacion' => 'Fecha Creacion',
            'fehca_revision' => 'Fehca Revision',
            'fecha_publicacion' => 'Fecha Publicacion',
            'id_escuela' => 'Id Escuela',
            'id_estados' => 'Id Estados',
            'id_categoria' => 'Id Categoria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEscuela()
    {
        return $this->hasOne(Escuelas::className(), ['id_escuela' => 'id_escuela']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEstados()
    {
        return $this->hasOne(Estados::className(), ['id_estados' => 'id_estados']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticuloAutores()
    {
        return $this->hasMany(ArticuloAutores::className(), ['id_articulo' => 'id_articulo', 'id_escuela' => 'id_escuela']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAutores()
    {
        return $this->hasMany(Docentes::className(), ['id_docente' => 'id_autores', 'id_escuela' => 'id_escuela'])->viaTable('articulo_autores', ['id_articulo' => 'id_articulo', 'id_escuela' => 'id_escuela']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticuloCategorias()
    {
        return $this->hasMany(ArticuloCategoria::className(), ['id_articulo' => 'id_articulo', 'id_escuela' => 'id_escuela', 'id_estados' => 'id_estados', 'id_categoria' => 'id_categoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategoria1s()
    {
        return $this->hasMany(Categoria::className(), ['id_categoria' => 'id_categoria1'])->viaTable('articulo_categoria', ['id_articulo' => 'id_articulo', 'id_escuela' => 'id_escuela', 'id_estados' => 'id_estados', 'id_categoria' => 'id_categoria']);
    }
}
