<?php
    $db_host = 'localhost';
    $db_port = '3306';
    $db_user = 'root';
    $db_pass = 'root';
    $db_name = 'phpstudy';
    $charset = 'utf8';

    // php连接mysql数据库
    $link = @mysqli_connect($db_host . ':' . $db_port, $db_user, $db_pass);
    if(!$link){
        echo "数据库连接失败,错误信息：" . mysqli_connect_error();
        die();
    };
    // 选择数据库
    if(!mysqli_select_db($link,$db_name)){
        echo '选择数据库失败。';
        die();
    }
    // 设置字符集
    mysqli_set_charset($link,$charset);

    // 执行sql语句
    $sql = "select * from product";
    $result = mysqli_query($link,$sql);
    // var_dump($result);

    // 从结果集中获取一行数据并作为枚举数组返回(下标是数字)
    $arr = mysqli_fetch_row($result);
    $arr = mysqli_fetch_row($result);//没调用一次取出一行，指针下移
    print_r($arr);

    // 从结果集中获取一行数据并作为关联数组返回(字段名做下标)
    $arr2 = mysqli_fetch_assoc($result);
    echo '<br>';
    print_r($arr2);
    // 从结果集中获取一行数据并作为枚举数组，或关联数组，或两者皆有MYSQLI_NUM,MYSQLI_ASSOC,MYSQLI_BOTH（默认）
    echo '<br>';
    $arr3 = mysqli_fetch_array($result,MYSQLI_ASSOC);
    print_r($arr3);

    // 从结果集中取出所有行并作为枚举数组，或关联数组，或两者皆有MYSQLI_NUM,MYSQLI_ASSOC,MYSQLI_BOTH）
    $arrs = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo '<pre>';
    print_r($arrs);
    echo '<pre>';
    // 手动销毁结果集变量
    mysqli_free_result($result);
    // 关闭数据库连接
    // echo '数据库连接成功';
    mysqli_close($link);//数据获取成功后关闭数据库连接