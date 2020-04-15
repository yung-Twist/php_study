<?php
    echo '当前请求的网页地址：',$_SERVER['PHP_SELF'],'<br>';
    echo '当前请求的服务器名：',$_SERVER['SERVER_NAME'],'<br>';
    echo '当前请求的服务器IP地址：',$_SERVER['SERVER_ADDR'],'<br>';
    echo '当前请求的网站物理地址：',$_SERVER['DOCUMENT_ROOT'],'<br>';
    echo '当前请求的客户端IP地址：',$_SERVER['REMOTE_ADDR'],'<br>';
    echo '当前网页的地址：',$_SERVER['SCRIPT_NAME'],'<br>';