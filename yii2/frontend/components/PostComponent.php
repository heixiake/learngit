<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 17/03/2017
 * Time: 10:40 AM
 */

namespace frontend\components;


use yii\base\Component;
use yii\base\Event;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\TimestampBehavior;

class PostEvent extends Event
{
    public $id;
}


class PostComponent extends Component
{


    const EVENT_BEFORE_ADD = 'beforeAdd';
    const EVENT_AFTER_ADD = 'afterAdd';


    public function behaviors()
    {
        return [
//            'attribute'=>[
//                'class'=>TimestampBehavior::className()
//            ],
            'mybehavior'=>[
                'class'=> MyBehavior::className(),
                'title'=> 'title1',
                'content'=>'content1'
            ]
        ];
    }


    public function add($arr)
    {
        echo "添加成功:$arr<br>";
        $id=10;


        //添加到索引
        $this->trigger(self::EVENT_AFTER_ADD,new PostEvent(['id'=>$id]));
    }
}