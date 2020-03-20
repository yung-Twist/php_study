<?php
//     字符串输出：
    //     echo： 输出一个或多个字符（不是函数，是语言结构）
    //     print：输出一个字符串
    //     print_r：输出变量的较为详细的信息
    //     var_dump：输出变量的完整信息
//     字符串去除与填充：
        // trim：消除一个字符串两端的空白字符或指定字符（空白字符包括：空格，\n, \r, \t等）
            //  $str1 = “   ab  cd   “;
            //  $str2 = trim($str1);		//”ab  cd”
        // ltrim：消除一个字符串左边的空白字符或指定字符
        // rtrim：消除一个字符串右边的空白字符或指定字符
        // str_pad：将一个字符串使用指定的字符填充到指定的长度
// 字符串连接与分割：
    // implode：将一个数组的值连接起来组成一个字符串
    // join：同implode
    // $arr1  = [‘ab’,  ‘cd’,  12,  3.5]
    // $v2 = implode(‘-’, $arr1);	//用“-”连接该数组的所有项,结果为：”ab-cd-12-3.5”
    // explode： 将一个字符串使用指定的字符分割为一个数组
        // $v1= ”ab-cd-12-3.5”;
        // $arr1 = explode(‘-’,  $v1);	//结果为：[‘ab’,  ‘cd’,  12,  3.5]
        // $arr2 = explode(‘cd’, $v1);	//结果为：[‘ab-’,  ‘-12-3.5’]
    // str_split：将一个字符串按指定的长度分割为一个数组
    // 字符串截取：
        // substr：获取一个字符串中指定位置开始指定长度的子字符串
        // strstr：获取一个字符串中某个指定字符首次出现的位置起，到最后结尾处的字符
// 		strstr(‘abcd.12.3.txt’, ‘.’);	//结果是：”.12.3.txt”
        // strrchr：获取一个字符串中某个指定字符最后一次出现的位置起，到最后结尾处的字符
        // 		strrchr(‘abcd.12.3.txt’, ‘.’);	//结果是：”.txt”

    // 字符串替换：
    // str_replace：将一个字符串中的指定字符，替换为给定的新字符。
        // $v1 = ”ab-cd-12-3.5”;
        // $v2 = str_replace(‘-’, ‘|’,  $v1);	//结果是：”ab|cd|12|3.5”
        // $v3 = str_replace(‘-’, ‘++’,  $v1);	//结果是：”ab++cd++12++3.5”

    // substr_replace：将一个字符串中指定位置开始的指定个数的字符，替换为给定的新字符。

    // 字符串长度与位置： 
    // strlen：获取字符串的字节长度。
    // strpos：获取一个字符串中某个子字符串首次出现的位置。
    // 		strpos(‘abcd.12.3.txt’, ‘.’);	//结果是：4
    // strrpos：获取一个字符串中某个子字符串最后一次出现的位置。
    // strrpos(‘abcd.12.3.txt’, ‘.’);	//结果是：9
    // strrpos(‘abcd.12.3.txt’, ‘cd’);	//结果是：2
        // $v1 = ‘abcdefg’;
        // $s1 = $v1[0];	//类似数组的语法，其实是取得一个字符串中某个位置上的字符！结果为’a’
        // $s2 = $v1[3];	//”d”

    // 字符转换：
    // strtolower：将一个字符串转换为小写。
    // strtoupper：将一个字符串转换为大写。
    // lcfirst：将一个字符串的首字母转换为小写。
    // ucfirst：将一个字符串的首字母转换为大写。
    // ucwords：将一个字符串中的所有单词的首字母转换大写。

    // 特殊字符处理：
    // nl2br：将换行符转换为”<br />”标签字符
    // addslashes： 将一个字符串中的以下几个字符使用反斜杠进行转义：\	‘	“	
    // htmlspecialchars：将html中的特殊字符转换为html实体字符，如下所示： 
    // （&  ‘  “  <  > ）分别转换为：（（&amp;  &apos;  &quot; &lt;  &gt; ）
    // htmlspecialchars_decode：将html实体字符，转换回原本的字符。