<?php
    /**
    * 常见错误代号有：
    *E_NOTICE：
        *提示性错误，轻微；
        *错误发生后，后面的程序继续执行。
    *E_WARNING：
        *警告性错误，稍微严重；
        *错误发生后，后面的程序继续执行。
    *E_ERROR：
        *严重错误/致命错误；
        *错误发生后，后面的程序不再执行！
    *E_PARSE：
        *语法错误（语法解析错误）；
        *语法解释错误，是直接就不运行程序。
    *E_USER_NOTICE：
        *用户自定义的提示错误
    *E_USER_WARNING：
        *用户自定义的警告错误
    *E_USER_ERROR：
        *用户自定义的严重错误
    *E_ALL：
        *它是一个代表“所有”错误的代号。

    *说明：
    *1，这些错误代号，其实只是系统预先设定的一些常量，他们的值大约是：1， 2， 4， 8， 16.....
    *2，这些错误代号，通常只是用于对错误控制时进行“设置”使用。
    *3，他们是一系列的整数，并具有一定的规律：1,2,4,8,16,32,64， 。。。。
    *4，可以在php.ini中使用（设置）他们，如下所示：
     */

    /**
    *错误显示设置
    *如果有错误发生（触发了错误），默认情况下会被显示在页面（即输出的结果页面）。
    *
    *我们可以对此进行设置，以决定以下两点：
    *1，设置display_errors以决定是否显示错误：
    *   在php.ini中设置：	display_errors = On或Off
    *这里设置，影响所有使用该php语言引擎的代码（网站页面）；

    *在php文件中设置：	
    *   ini_set(‘display_errors’, 1或0);	//1表示显示，0不显示
    *在这里设置，只影响当前网页代码本身。

    *2，设置error_reporting以决定显示哪些错误：
    *   在php.ini中设置：	error_reporting = 错误代号1  | 错误代号2  |  ..... 
    *(要显示的就写出来，或者可以写E_ALL, 表示显示所有）
    *在代php文件中，道理类似：
    *   ini_set(‘error_reporting’, 错误代号1  | 错误代号2  |  .....）
    */




    /** 
    *错误日志设置
    *如果有错误发生（触发了错误），默认情况下不会将错误信息记录（保存）下来。

    *我们可以对此进行设置，以决定以下两点：
    *1，设置log_errors以决定是否记录错误：
    *   php.ini中设置：	 log_errors = On 或 Off
    *代码文件中设置： 
    *   ini_set (‘log_errors’, 1或0)
    *2，设置error_log以决定记录到哪里：
    *通常，就设置为一个文件名，php系统会在网站的每个文件夹下都建立该文件，并记录错误。
    *php.ini中： 
        *error_log = error.txt;		//它是纯文本的
    *代码中： 
        *ini_set(“error_log”,  ‘error.txt’);
    */



    //  用户错误
    // trigger_error(“自定义错误提示内容”,  自定义错误的代号);
    function func($age){
        if($age > 0 && $age <= 60){
            echo "<br>审核通过！";
        }else{
            trigger_error("您的年龄不在我们的服务范围内",  E_USER_NOTICE);
        }
    }
    func(43);
    echo "<br>";
    func(61);
    // 错误日志记录
    ini_set('log_errors',1);
    ini_set('error_log','error.txt');

    // 制作错误
    include './ccccc.php';
    $v1;
    