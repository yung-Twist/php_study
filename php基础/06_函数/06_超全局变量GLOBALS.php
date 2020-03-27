<?php
    $v1 = 1;
    function foo(){
        //echo $v1;//报错
        echo $GLOBALS['v1'];
    }
    foo();