<?php
    /**
    * time：获得当前时间（精确到秒），结果其实一个“整数”而已，代表从1970年1月1日0:0:0秒到当前时刻的秒数。
    *microtime：获得当前时间（可以精确到微秒）
    *有两个用法：
    *   microtime(true)：获得秒数（跟time一样），是一个数字（浮点数，有4位小数）
    *   microtime(false）：获得也是秒数，但因为精度太高，导致浮点数无法表达出来，以致返回的是一个字符串。
    *mktime：创建一个时间数据，参数为：时、分、秒，月、日、年
    *   $t1 = mktime(10, 8, 5, 7, 12,  2018);
    *date：将一个时间转换为某种字符串形式
    *date(“Y-m-d H:i:s”);
    *idate：取得一个时间的某个单项数据值，比如idate(“Y”)取得年份数
    *strtotime：将一个字符串“转换”为时间值；
    *date_default_timezone_set：在代码中设置“时区”
    *date_default_timezone_get：在代码中获取“时区”
     */