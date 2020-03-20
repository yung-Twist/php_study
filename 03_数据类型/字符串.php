<?php
    // 数据标量 int float boolean string
    $v1 = 10;
    echo '单引号里面的$v1: $v1';
    echo '<br>';
    echo "双引号里面的v1：$v1";
    echo '<br>';
    echo "双引号里面的$v1 ：$v1";
    echo '<br>';
    echo "双引号里面的\$v1：$v1";
//  strlen(字符串)：
//      求该字符串的“字节数”，也就是占据的字节空间大小；
//  mb_strlen(字符串)：
//      求该字符串的“字符个数”。

$str1 = "西西acvvdde";
echo "<br>\$str1的字节数：" . strlen($str1);
echo "<br>\$str1的字符数" . mb_strlen($str1);//mb_strlen()要在php.ini中开启 extension=mbstring 模块