<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/31
 * Time: 4:39 PM
 */


trait A
{
    public function smallTalk()
    {
        echo "a\n";
    }

    public function bigTalk()
    {
        echo "A\n";
    }
}

trait B
{
    public function smallTalk()
    {
        echo "b\n";
    }

    public function bigTalk()
    {
        echo "B\n";
    }
}

class Talker
{
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Alised_Talker
{
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}



$t = new Talker();
$t->smallTalk();
$t->bigTalk();

$a_t = new Alised_Talker();
$a_t->smallTalk();
$a_t->bigTalk();
$a_t->talk();

if (strpos("testing", "test") !== false){
    echo "yes\n";
} else {
    echo "no\n";
}

function test($a)
{
//    if ($a)
//        return true;
//
//    return false;
    return (bool) $a;
}

//var_dump(test(0));
//isset empty is_null

echo "\n empty: \n";
// 判断一个变量是否为空、当不存在或者值为false时,认为不存在。

// isset 一个变量被设置,值不为null 就是为true;
// empty 如果变量为''、false、array、null、"0"或0 或unset($a);
// is_null 值为null
var_dump(empty(false));



//trait ezcFlectionMethod
//{
//    public function getReturnType()
//    {
//        //type code
//        echo "this is type\n";
//    }
//
//    public function getReturnDescrion()
//    {
//        //descrition code
//        echo "this is descrion \n";
//    }
//}
//
//
//
//class ezcFlectMethod
//{
//    use ezcFlectionMethod;
//}
//
//class ezcFlectFunction
//{
//    use ezcFlectionMethod;
//}
//
//$method = new ezcFlectMethod();
//$function = new ezcFlectFunction();
//$method->getReturnType();
//$function->getReturnType();