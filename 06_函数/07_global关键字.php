<?php
    $v1 = 1;
    function func(){
        global $v1;//局部定义一个v1变量，并且“引用”全局的$v1变量
        echo $v1;
    }
    func();