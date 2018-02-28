<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservas".
 *
 * @property int $habitaciones_id
 * @property string $fecha_entrada
 * @property string $fecha_salida
 * @property int $clientes_id
 * @property string $precio
 * @property string $observacion
 *
 * @property Clientes $clientes
 * @property Habitaciones $habitaciones
 */
class Reservas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reservas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['habitaciones, clientes, dias'], 'safe'],
            [['habitaciones_id', 'fecha_entrada', 'fecha_salida'], 'required'],
            [['habitaciones_id', 'clientes_id'], 'default', 'value' => null],
            [['habitaciones_id', 'clientes_id'], 'integer'],
            [['fecha_entrada', 'fecha_salida'], 'safe'],
            [['precio'], 'number'],
            [['observacion'], 'string'],
            [['habitaciones_id', 'fecha_entrada', 'fecha_salida'], 'unique', 'targetAttribute' => ['habitaciones_id', 'fecha_entrada', 'fecha_salida']],
            [['clientes_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::className(), 'targetAttribute' => ['clientes_id' => 'id']],
            [['habitaciones_id'], 'exist', 'skipOnError' => true, 'targetClass' => Habitaciones::className(), 'targetAttribute' => ['habitaciones_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Reserva ID',
            'habitaciones' => 'Habitación',
            'clientes' => 'Clientes',
            'dias' => 'Días',
            'habitaciones_id' => 'Habitación ID',
            'clientes_id' => 'Cliente ID',
            'fecha_entrada' => 'Entrada',
            'fecha_salida' => 'Salida',
            'precio' => 'Precio',
            'observacion' => 'Observación',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasOne(Clientes::className(), ['id' => 'clientes_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHabitaciones()
    {
        return $this->hasOne(Habitaciones::className(), ['id' => 'habitaciones_id']);
    }

    /**
     * Devuelve la cantidad de días que ha reservado o un string con N/D
     * @return mixed Integer
     */
    public function getDias()
    {
        // TODO → Función solo planteada, no se espera que funcione
        if ($this->fecha_salida) {
            return (int)($this->fecha_salida - $this->fecha_entrada);
        }

        return (int)0;
    }
}
