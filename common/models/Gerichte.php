<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%gerichte}}".
 *
 * @property int $g_id
 * @property string $g_name
 * @property string|null $g_beschreibung
 * @property float $g_fett
 * @property float $g_eiweiß
 * @property float $g_kohlenhydrate
 * @property float $g_kalorien
 * @property string $g_sig_datum
 * @property int $g_sig_id
 *
 * @property GerichteToUser[] $gerichteToUsers
 */
class Gerichte extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%gerichte}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['g_name', 'g_fett', 'g_eiweiß', 'g_kohlenhydrate', 'g_kalorien', 'g_sig_datum', 'g_sig_id'], 'required'],
            [['g_fett', 'g_eiweiß', 'g_kohlenhydrate', 'g_kalorien'], 'number'],
            [['g_sig_datum'], 'safe'],
            [['g_sig_id'], 'integer'],
            [['g_name'], 'string', 'max' => 255],
            [['g_beschreibung'], 'string', 'max' => 5000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'g_id' => Yii::t('app', 'G ID'),
            'g_name' => Yii::t('app', 'G Name'),
            'g_beschreibung' => Yii::t('app', 'G Beschreibung'),
            'g_fett' => Yii::t('app', 'G Fett'),
            'g_eiweiß' => Yii::t('app', 'G Eiweiß'),
            'g_kohlenhydrate' => Yii::t('app', 'G Kohlenhydrate'),
            'g_kalorien' => Yii::t('app', 'G Kalorien'),
            'g_sig_datum' => Yii::t('app', 'G Sig Datum'),
            'g_sig_id' => Yii::t('app', 'G Sig ID'),
        ];
    }

    /**
     * Gets query for [[GerichteToUsers]].
     *
     * @return \yii\db\ActiveQuery|GerichteToUserQuery
     */
    public function getGerichteToUsers()
    {
        return $this->hasMany(GerichteToUser::class, ['gtu_g_id' => 'g_id']);
    }

    /**
     * {@inheritdoc}
     * @return GerichteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GerichteQuery(get_called_class());
    }
}
