<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $dni
 * @property string $sexo
 * @property string $fecha_naci
 * @property string $pais
 * @property string $provincia
 * @property string $ciudad
 * @property string $cod_postal
 * @property string $direccion
 * @property string $telefono
 * @property string $observacion
 *
 * @property Reservas[] $reservas
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_naci'], 'safe'],
            [['cod_postal', 'telefono'], 'number'],
            [['observacion'], 'string'],
            [['nombre', 'apellidos', 'dni', 'sexo', 'pais', 'provincia', 'ciudad', 'direccion'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'dni' => 'Dni',
            'sexo' => 'Sexo',
            'fecha_naci' => 'Fecha Naci',
            'pais' => 'Pais',
            'provincia' => 'Provincia',
            'ciudad' => 'Ciudad',
            'cod_postal' => 'Cod Postal',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'observacion' => 'Observacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reservas::className(), ['clientes_id' => 'id']);
    }
}
