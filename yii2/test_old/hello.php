<?php 

    if ($argc != 2) {
        echo "Usage: php hello.php [name] \n";
        exit(1);
    }

    $name  = $argv[1];
    echo "hello, $name\n";

    $input  = [1, 2, 3, 4, 5, 6];

    function criter_greater_than($min)
    {
        return function ($item) use ($min) {
            return $item > $min;
        };
    }

    $output = array_filter($input, criter_greater_than(3));
    print_r($output);

//    $input = array(1, 2, 3, 4, 5, 6);
//
//    $filter_even = function ($item) {
//        return ($item % 2) == 0;
//    };
//
////    $output = array_filter($input, $filter_even);
//
//
//    $output = array_filter($input, function($item) {
//        return ($item % 2) == 0;
//    });
//    print_r($output);

