<?php
    /**
     * php变量名前面都要有 $
     * 变量命名字母下划线开头，不能数字开头
     * var_dump可以输入一个变量的完整信息
     */
    $v1 = 1;
    $v2 = 2;
    $v3 = $v1 + $v2;
    echo $v3;
    echo "<br>";
    var_dump(isset($v1)) ;//isset()检查变量是否存在
    echo "<br>";
    var_dump(isset($v4));
    unset($v2);//unset()销毁变量
    echo $v2;//报错Undefined variable
?>