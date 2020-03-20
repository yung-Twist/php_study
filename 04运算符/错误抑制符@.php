<?php
    /**
     * @
     */
    if(@mysqli_connect('localhost','root','root')){
        echo '连接成功';
    }else{
        echo '连接失败';
    }
?>