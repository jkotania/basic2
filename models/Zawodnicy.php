<?php

namespace app\models;

use Yii;

/**
 * @property int $id
 * @property string $imie
 * @property string $nazwisko
 * @property string $pochodzenie
 * @property int $wiek
 * @property int $numer
 * @property string $pozycja
 * @property int $id_zespolu
 */
class Zawodnicy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zawodnicy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imie', 'nazwisko', 'pochodzenie', 'pozycja'], 'string', 'max' => 255],
            [['wiek', 'numer', 'id_zespolu'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imie' => 'Imię',
            'nazwisko' => 'Nazwisko',
            'pochodzenie' => 'Pochodzenie',
            'wiek' => 'Wiek',
            'numer' => 'Numer',
            'pozycja' => 'Pozycja',
            'id_zespolu' => 'ID Zespołu',
        ];
    }
}