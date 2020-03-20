<?php

    // 局部变量中的静态变量
    function static_demo(){
        $v1 = 1;
        static $v2 = 2;//静态变量函数调用完后会保存不会销毁
        $v1++;
        $v2++;
        echo "<br>v1的值为{$v1},v2的值为{$v2}";
    }
    static_demo();
    static_demo();
    static_demo();