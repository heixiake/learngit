<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 21/03/2017
 * Time: 11:04 AM
 */

namespace frontend\models;

use yii\base\Object;

class UserLister extends Object
{
    public $finder;

    // 从构造函数看，这个类依赖于 UserFinderInterface接口
    public function __construct(UserFinderInterface $finder, $config = [])
    {
        $this->finder = $finder;
        parent::__construct($config);
    }
}

