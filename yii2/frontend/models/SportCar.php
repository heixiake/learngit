<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/06/2017
 * Time: 12:44 AM
 */

namespace frontend\models;


use common\models\Car;
use frontend\models\query\CarQuery;

class SportCar extends Car
{
    const TYPE= 'sport';

    /**
     * @return \common\models\query\CarQuery
     */
    public static function find()
    {
        return new \common\models\query\CarQuery(get_called_class(),['where'=>['type'=>self::TYPE]]);
    }

    public function beforeSave($insert)
    {
        $this->type = self::TYPE;
        return parent::beforeSave($insert);
    }


}