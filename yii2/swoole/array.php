<?php
    $input = ["oranges"=>2,"apples"=>2,"pears",1=>"asdf"];
    var_dump($input);
    $fliparr = array_flip($input);
    var_dump($fliparr);
    var_dump(array_keys($input));
    var_dump(array_values($input));
    var_dump(in_array("asdf",$input));
    var_dump(array_search("asdf",$input));
    var_dump(array_key_exists('1', $input));
    var_dump(isset($input[5]));

    echo '\n 数据指针处理<br>';
    echo '';
    var_dump(current($input));
    var_dump(pos($input));
    var_dump(key($input));
    next($input);
    var_dump(pos($input));
    end($input);
    var_dump(pos($input));
    extract($input);
    var_dump($oranges);
    var_dump($apples);
    
    $var1 = 'var1';
    $var2 = 'var2';
    $var3 = 'var3';

    $link_var= ["var2","var3","var4"];
    $another_arr = compact("var1",$link_var);
    var_dump($another_arr);
    echo "-----数据分段添加-----";
    var_dump(array_slice($input,0,1));
    array_splice($input,0,2,["name"=>'zly','age'=>33]);
    var_dump($input);
    var_dump(array_chunk($input,2,false));
    var_dump(array_pad($input, 8, 'aa'));
    echo "----数组与zan";
    array_push($input,"hello","world");
    var_dump($input);
    array_pop($input);
    var_dump($input);
    echo "-----数据与队列";
   var_dump( array_shift($input));
    array_unshift($input,"dui1",'dui2');
    var_dump($input);
    echo "----回调函数------";
    //array_walk
    $input = ['name'=>'zly', 'age'=>30];
    function person_info($val, $key)
    {
        echo "this $key is $val---";
    }
    array_walk($input, 'person_info');
    //array_map
    function person_map($v){
        return "zly".$v;
    } 
    var_dump(array_map("person_map",$input));
    //array_fillter    
    function arr_filter($val)
    {
            return $val == 30;
    } 
    var_dump(array_filter($input, "arr_filter"));
    //array_reduce
    function arr_reduce($v1,$v2)
    {
        return $v1.'--'.$v2;
    }
    var_dump(array_reduce($input,"arr_reduce"));
    echo "----------数据排序------"


?>
