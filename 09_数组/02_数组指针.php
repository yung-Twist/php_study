<?php
/**
    *$re  =  current( $arr1);		//取得数组中当前指针所在单元的值；
    *$re  =  key( $arr1 );		//取得数组中当前指针所在单元的键（下标）；
    *$re  =  next( $arr1 );		//将数组中的指针往后移动一个位置，并取得新位置上的值；
    *$re  =  prev( $arr1 );		//将数组中的指针往前移动一个位置，并取得新位置上的值；
    *$re  =  end( $arr1 );		//将数组中的指针移动到最后一个位置，并取得新位置上的值；
    *$re  =  reset($arr1);		//将数组中的指针移动到最前一个位置，并取得新位置上的值；
 */
    $arr = ["name"=>"Jack","age"=>18,13,'cc'=>'CC'];
    $count = count($arr);
    reset($arr);
    for($a = 0; $a < $count; $a++){
        $key = key($arr);
        $value = current($arr);
        next($arr);
        echo "<br>$key----------$value";
    }

    $arr2 = [
        [1,2,3],
        [4,5,6,7],
        [8,9,10,11,12]
    ];
    // 使用for循环求arr2的和及其平均值
    $sum = 0;
    $num = 0;
    for($i = 0;$i < count($arr2);$i++){
        $value = current($arr2);
        $count = count($value);
        for($j = 0;$j < $count; $j++){
            $sum += current($value);
            next($value);
        }
        $num += $count;
        next($arr2);
    }
    $average = $sum/$num;
    echo "<br>和为：$sum";
    echo "<br>平均值为$average";
