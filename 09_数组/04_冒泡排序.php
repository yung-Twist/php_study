<?php
    $arr = [23,12,5,29,43,20];
    $n = count($arr);
    for($a = 0;$a < $n - 1;$a++){
        for($b = 0;$b < $n - 1 - $a;$b++){
            if($arr[$b] > $arr[$b + 1]){
                $temp = $arr[$b];
                $arr[$b] = $arr[$b + 1];
                $arr[$b + 1] = $temp;
            }
        }
    }
    echo "<pre>";
    print_r($arr);
    echo "</pre>";