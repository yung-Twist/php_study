<?php
    $arr = [
        "cdcd"=>[3,2,43],
        ["nmu1"=>12,"cc"=>3,41],
        ["ac"=>32,4,6]
    ];
    $sum = 0;
    foreach($arr as $key1=>$value){
        foreach($value as $key2=>$num){
            echo "<br>$key2:$num";
            $sum += $num;
        }
    }
    echo "<br>\$arr组数中的数据和为：$sum";