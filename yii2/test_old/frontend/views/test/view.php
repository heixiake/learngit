<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 14/08/2017
 * Time: 6:10 PM
 */

//ob_start('handString');
//echo '12345';
//
//function handString($string){
//    return md5($string);
//}


ob_start('handleString');

echo '123456';

function handleString($string){
    return md5($string);
}

output_reset_rewrite_vars();