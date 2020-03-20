<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    /**
    *include：每次都载入文件（可能会重复载入），如果载入失败，在报错后继续执行后续语句；
    *include_once：只载入一次（不会重复载入），如果载入失败，在报错后继续执行后续语句；
    *require：每次都载入文件（可能会重复载入），如果载入失败，在报错后终止程序；
    *require_once：只载入一次（不会重复载入），如果载入失败，在报错后终止程序；
     */
        include './page/page1.html';
        include './page/page2.php';
        echo "<br>";
        echo "我是page2中定义的变量v1:$v1"
    ?>
</body>
</html>