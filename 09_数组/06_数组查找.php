<?php
/**
 * in_array()			：在一个数组中找是否存在某个数据。
 * array_search()		： 在数组中搜索给定的值，如果成功则返回相应的键名
 * array_key_exists()	： 检查给定的键名或索引是否存在于数组中
 */
$arr = ["name"=>"Jack","age"=>18,13,'cc'=>'CC'];

echo "<br>jack是否存在数组中" . in_array("Jack",$arr);//1
echo "<br>'CC'在数组中的键名" . array_search('CC',$arr);//cc
echo "<br>'age'键名是否存在数组中" . array_key_exists('age',$arr);//1

    