<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 17/03/2017
 * Time: 2:59 PM
 */

namespace frontend\components;


use yii\base\Behavior;

class MyBehavior extends Behavior
{

    public $title;
    public $content;

    private $_age;

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }


    public function hello()
    {
        echo "hello in mybehavior<br>";
    }
}