<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/31
 * Time: 5:46 PM
 */

class NormalClass extends \yii\debug\models\search\Db
{
    use \cebe\markdown\block\TableTrait;

    public $name;

    protected $sex;

    private $age;

    static $company;

    /**
     * NormalClass constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __destruct()
    {

    }




    public static function staticFunction()
    {
        
    }
    
    

    public function publicFunction(Type $val = null) : \MongoDB\BSON\Type
    {
        
    }


    protected function protectFunction()
    {

    }

    private function privateFunction()
    {

    }


    protected function parseInline($text)
    {
        // TODO: Implement parseInline() method.
    }

    protected function renderAbsy($absy)
    {
        // TODO: Implement renderAbsy() method.
    }
}