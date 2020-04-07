<?php

namespace frontend\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Build]].
 *
 * @see \common\models\Build
 */
class BuildQuery extends \yii\db\ActiveQuery
{

    public function active()
    {
        return $this->andWhere('[[status]]=1');
    }

    /**
     * @inheritdoc
     * @return \common\models\Build[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\Build|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    public function status($status)
    {
        return $this->where(['status'=>$status]);
    }

}
