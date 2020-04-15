<?php
    $score = $_GET['score'];
    if(is_numeric($score)){
        if($score >= 90){
            echo '优秀';
        }elseif($score >= 80 && $score < 90){
            echo '良好';
        }else{
            echo '你可真笨';
        }
    }else{
        echo '你确定你输入的是分数？？？？？？';
    }