<?php
    //  自定义错误
    // 定义错误函数 set_error_handler("处理错误的函数")
    set_error_handler("my_error_handler");
    function my_error_handler($errCode,$errMsg,$errFile,$errLine){
        /**
         * $errCode:错误代码
         * $errMSg:错误信息
         * $errFile:错误文件
         * $errLine:行号
         */
        echo "<br>哇哇哇，你代码有问题吖！";
        $str = "code:$errCode,msg:$errMsg";
        // 记录错误日志
        file_put_contents('./error_self.txt',$str,FILE_APPEND);
    }


    echo $v1;//未定义的变量
    include './cccc.php';//引用不存在的文件
    function foo(){};
     fod();//调用不存在的函数,仍然会报错，自定义错误无法定义 致命 错误