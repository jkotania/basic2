<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zespoly".
 *
 * @property int $lp
 * @property string $druzyna
 * @property int $mecze
 * @property int $punkty
 * @property int $zwyciestwa
 * @property int $remisy
 * @property int $porazki
 * @property int $zdobyte_bramki
 * @property int $stracone_bramki
 */
class Ekstraklasa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zespoly';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lp', 'mecze', 'punkty', 'zwyciestwa', 'remisy', 'porazki', 'zdobyte_bramki', 'stracone_bramki'], 'integer'],
            [['druzyna'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lp' => 'Lp',
            'druzyna' => 'Druzyna',
            'mecze' => 'Mecze',
            'punkty' => 'Punkty',
            'zwyciestwa' => 'Zwyciestwa',
            'remisy' => 'Remisy',
            'porazki' => 'Porazki',
            'zdobyte_bramki' => 'Zdobyte Bramki',
            'stracone_bramki' => 'Stracone Bramki',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function primaryKey()
    {
        return ['lp'];
    }
}