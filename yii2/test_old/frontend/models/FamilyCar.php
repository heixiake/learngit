<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/06/2017
 * Time: 12:46 AM
 */

namespace frontend\models;


use common\models\Car;
use frontend\models\query\CarQuery;

class FamilyCar extends Car
{

    const TYPE ='family';

    /**
     * @return \common\models\query\CarQuery
     */
    public static function find()
    {
        return new \common\models\query\CarQuery(get_called_class(),['where'=>['type'=>self::TYPE]]);
    }

    /**
     * @param bool $insert
     * @return bool
     */
    public function beforeSave($insert)
    {
        $this->type = self::TYPE;
        return parent::beforeSave($insert);
    }


}