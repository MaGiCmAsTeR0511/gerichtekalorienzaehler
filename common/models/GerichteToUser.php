<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%gerichte_to_user}}".
 *
 * @property int $gtu_id
 * @property int $gtu_u_id
 * @property int $gtu_g_id
 * @property string $gtu_sig_datum
 * @property int $gtu_sig_id
 *
 * @property Gerichte $gtuG
 * @property User $gtuU
 */
class GerichteToUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%gerichte_to_user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gtu_u_id', 'gtu_g_id', 'gtu_sig_datum', 'gtu_sig_id'], 'required'],
            [['gtu_u_id', 'gtu_g_id', 'gtu_sig_id'], 'integer'],
            [['gtu_sig_datum'], 'safe'],
            [['gtu_g_id'], 'exist', 'skipOnError' => true, 'targetClass' => Gerichte::class, 'targetAttribute' => ['gtu_g_id' => 'g_id']],
            [['gtu_u_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['gtu_u_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gtu_id' => Yii::t('app', 'Gtu ID'),
            'gtu_u_id' => Yii::t('app', 'Gtu U ID'),
            'gtu_g_id' => Yii::t('app', 'Gtu G ID'),
            'gtu_sig_datum' => Yii::t('app', 'Gtu Sig Datum'),
            'gtu_sig_id' => Yii::t('app', 'Gtu Sig ID'),
        ];
    }

    /**
     * Gets query for [[GtuG]].
     *
     * @return \yii\db\ActiveQuery|GerichteQuery
     */
    public function getGtuG()
    {
        return $this->hasOne(Gerichte::class, ['g_id' => 'gtu_g_id']);
    }

    /**
     * Gets query for [[GtuU]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getGtuU()
    {
        return $this->hasOne(User::class, ['id' => 'gtu_u_id']);
    }

    /**
     * {@inheritdoc}
     * @return GerichteToUserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GerichteToUserQuery(get_called_class());
    }
}
