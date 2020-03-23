<?php
    $arr1 = [2, 5, 8, 10, 15, 18, 22, 24, 24, 28,33, 35, 50, 55, 56, 57, 60, 61, 62, 66, 70];
    function binary_search($arr, $search, $start, $end){
        if($start > $end){
            return false;
        }
        $mid = floor(($end + $start)/2);
        $mid_value = $arr[$mid];
        if($search == $mid_value){
            return true;
        }elseif($search < $mid_value){
            $new_end = $mid - 1;
            return binary_search($arr, $search, $start, $new_end);
        }else{
            $new_start = $mid + 1;
            return binary_search($arr, $search, $new_start, $end);
        }
    }

    $search = 57;
    $count = count($arr1) - 1;
    $result =  binary_search($arr1, $search, 0, $count);
    var_dump($result);