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
     * @var $disponible Devuelve si está disponible
     */
    public $disponible;

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
            [['disponible'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numero' => 'Nº',
            'descripcion' => 'Descripción',
            'precio_base' => 'Precio Base',
            'nombre' => 'Nombre',
            'disponible' => 'Libre'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reservas::className(), ['habitaciones_id' => 'id']);
    }


    /**
     * Comprueba si una instancia de habitación está libre
     * @return bool
     */
    public function estalibre()
    {
        return ! $this->disponible;
    }
}
