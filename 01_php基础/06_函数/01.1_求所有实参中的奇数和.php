<?php
    function sum(){
        $arr = func_get_args();
        $num = func_num_args();
        $sum = 0;
        for($i = 0; $i < $num ;$i++){
            if($arr[$i] % 2 != 0){
                $sum += $arr[$i];
            }
        }
        return $sum;
    }

    echo sum(11,3,2,8,4);