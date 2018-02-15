<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "habitaciones".
 *
 * @property int $id
 * @property string $numero
 * @property string $descripcion
 * @property string $precio_base
 * @property string $nombre
 *
 * @property Reservas[] $reservas
 */
class Habitaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'habitaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero', 'precio_base'], 'number'],
            [['descripcion'], 'string'],
            [['nombre'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numero' => 'Numero',
            'descripcion' => 'Descripcion',
            'precio_base' => 'Precio Base',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reservas::className(), ['habitaciones_id' => 'id']);
    }
}
