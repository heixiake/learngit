<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/5/24
 * Time: 5:44 PM
 */

swoole_timer_after(3000, function(){
   echo "this is timer one\n";
});