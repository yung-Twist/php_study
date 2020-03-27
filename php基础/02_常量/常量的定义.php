<?php
    /**
     * 1.define(‘常量名’,  对应的常量值);
     * 2.const 
     * 判断一个常量是否存在 defined();
     */
    define('name','帅哥');
    const age = 4;
    echo name;
    echo '<br>';
    echo age;
    echo '<br>';
    echo constant('name');
    echo '<br>';
    var_dump(defined('name'));
    echo '<br>';
    var_dump(defined('cc'));
?>