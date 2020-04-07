<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/17
 * Time: 7:21 PM
 */

abstract class Observer
{
    public $name;
    public $sub;

    public function __construct($name, $sub)
    {
        $this->name = $name;
        $this->sub = $sub;
    }

    public abstract function update();
}


class StockObserver extends Observer
{

    public function update()
    {
        echo $this->sub->actionMessage." ->".$this->name."关闭电脑,开始工作\n";
    }
}

class NbaObserver extends Observer
{
    public function update()
    {
        echo $this->sub->actionMessage."->".$this->name."不要看NBA,开始工作\n";
    }
}




class Securety
{
    public $list;
    public $actionMessage;

    public function attach(Observer $observer)
    {
        array_push($this->list, $observer);
    }

    public function detach(Observer $observer)
    {
        foreach ($this->list as $key => $value) {
            if ($observer == $value){
                unserialize($this->list[$key]);
            }
        }
    }

    public function notify()
    {
        foreach ($this->list as $item) {
            $item->update();
        }
    }
}

$qt = new Securety();

$xl = new StockObserver('xiaoli', $qt);
$zs = new NbaObserver('zhangsan', $qt);

$qt->attach($xl);
$qt->attach($zs);

$qt->actionMessage = '老板回来了';

$qt->notify();
