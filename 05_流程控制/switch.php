<?php
    $score = $_GET['score'];
    switch($score){
        case 90:
            echo '90分吖';
        break;
        case 100:
            echo '哇哇哇100';
        break;
        default:
            echo '你猜还有没有其他的返回';
    }