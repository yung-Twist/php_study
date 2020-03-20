<?php
    /**
     * gettype()获取数据类型
     * settype()设置数据类型
     */
    $v1 = 10;
    echo gettype($v1);
    echo '<br>';
    echo settype($v1,'string');
    echo '<br>';
    echo gettype($v1);
    //强制转换
    $v2 = (int) '10';
    echo '<br>';
    echo '$v2的数据类型是：' . gettype($v2);echo '<br>';
    var_dump($v1);echo '<br>';
    var_dump($v2);
    /**
     * 判断数据类型
     * is_int()/is_integer():判断是否为整数
     * is_float():判断是否为小数
     * is_bool():判断是否为布尔
     * is_array():判断是否为数组
     * is_numeric():判断是否为数字
     * is_object():判断是否为对象
     */
    echo '<br>';
    var_dump(is_int($v2));
    echo '<br>';
    $sum1 = 1 + '1dc';//2
    echo $sum1;
    echo '<br>';
    $sum2 = 1 . '1dd';//11dd
    echo $sum2;