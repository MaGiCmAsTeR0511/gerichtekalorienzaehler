<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[GerichteToUser]].
 *
 * @see GerichteToUser
 */
class GerichteToUserQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return GerichteToUser[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return GerichteToUser|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
