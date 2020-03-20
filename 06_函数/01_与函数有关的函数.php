<?php
/**
    * function_exists(“函数名”)：判断一个函数是否已经存在；
    *func_get_arg( $n )：	在函数内部可用，用于获得第n个实参（n从0开始算起）
    *func_get_args()：	在函数内部可用，用于获得所有实参，结果是一个数组
    *func_num_args()：	在函数内部可用，用于获得实参的个数
 */
    function foo(){
        // function_exists('ddd');
        echo  "第2个实参是：" . func_get_arg(1);
        echo  "<br>所有实参：";
        echo "<pre>";
        print_r(func_get_args());
        echo "<pre>";
        echo "<br>实参的个数为：" . func_num_args();
    }
    foo(1,2,3,4,5,6);
    echo "<br>";
    echo "函数foo是否存在：";
    var_dump(function_exists("foo"));
    echo "<br>";
    echo "函数fpp是否存在：";
    var_dump(function_exists("fpp"));
    