<?php

namespace app\models;

use function var_dump;
use Yii;
use yii\helpers\Html;

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
            'disponiblehoy' => 'Disponible Hoy'
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
    public function getDisponible()
    {
        $hoy = date("Y-m-d",strtotime(date("Y-m-d")));
        $manana = date("Y-m-d",(strtotime(date("Y-m-d")) + 86400));
        $pasado = date("Y-m-d",(strtotime(date("Y-m-d")) + 86400*2));

        $reservas = \app\models\Reservas::find();

        $rHoy = $reservas
            ->where(['<=', 'fecha_entrada', $hoy])
            ->andFilterWhere(['>=', 'fecha_salida', $hoy])
            ->andFilterWhere([
                'habitaciones_id' => $this->id,
            ])->count();

        $rManana = $reservas
            ->where(['<=', 'fecha_entrada', $manana])
            ->andFilterWhere(['>=', 'fecha_salida', $manana])
            ->andFilterWhere([
                'habitaciones_id' => $this->id,
            ])->count();

        $pasado = $reservas
            ->where(['<=', 'fecha_entrada', $pasado])
            ->andFilterWhere(['>=', 'fecha_salida', $pasado])
            ->andFilterWhere([
                'habitaciones_id' => $this->id,
            ])->count();


        $pintar = '';
        if ($rHoy != 0) {
            $pintar .= 'Hoy → NO';
        } else {
            $pintar .= 'Hoy → SI';
        }
        if ($rManana != 0) {
            $pintar .= '<br/>Mañana →  NO';
        } else {
            $pintar .= '<br/>Mañana → SI';
        }
        if ($pasado != 0) {
            $pintar .= '<br/>Pasado → NO';
        } else {
            $pintar .= '<br/>Pasado → SI';
        }


        return $pintar;
    }
}
