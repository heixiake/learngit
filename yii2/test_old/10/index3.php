<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/4/17
 * Time: 10:43 AM
 */

class TestPaper
{
    public function TestQuestion1()
    {
        echo '第一题：答案是1; 1、x, 2、y, 3、z<br>';
        echo $this->Answer1();
    }

    public function Answer1()
    {
    }

    public function TestQuestion2()
    {
        echo '第二题: 答案是2; 1、x, 2、y, 3、z<br>';
        echo $this->Answer2();
    }

    public function Answer2()
    {
    }

    public function TestQuestion3()
    {
        echo '第三题: 答案是3; 1、x, 2、y, 3、z<br>';
        echo $this->Answer3();
    }

    public function Answer3()
    {
    }
}

class TestPaperA extends TestPaper
{
    public function Answer1()
    {
        echo '2<br>';
    }

    public function Answer2()
    {
        echo '2<br>';
    }

    public function Answer3()
    {
        echo '3<br>';
    }


}

class TestPaperB extends TestPaper
{

    public function Answer1()
    {
        echo '2<br>';
    }


    public function Answer2()
    {
        echo '1<br>';
    }


    public function Answer3()
    {
        echo '1<br>';
    }
}


$ta = new TestPaperA();
$ta->TestQuestion1();
$ta->TestQuestion2();
$ta->TestQuestion3();


$tb = new TestPaperB();
$tb->TestQuestion1();
$tb->TestQuestion2();
$tb->TestQuestion3();

