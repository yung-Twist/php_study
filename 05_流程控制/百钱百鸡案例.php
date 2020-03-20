<?php
    //$gongji = 1;//5元一只
    //$muji = 1;//3元一只
    //$xiaoji = 1;//一元三只
    // 100块钱买100只鸡
    $count = 0;
    for($gongji = 0;$gongji <= 100;$gongji++){
        for($muji = 0;$muji <= 100;$muji++){
            for($xiaoji = 0;$xiaoji <= 100;$xiaoji++){
                $count++;
                if(($gongji + $muji + $xiaoji == 100) && (5 * $gongji + 3 * $muji + 1/3 * $xiaoji == 100)){
                    echo "<br>公鸡{$gongji}只，母鸡{$muji}只，小鸡{$xiaoji}只";
                    // return;
                }
            }
        }
    }
    echo "<br>一共计算了{$count}次";
    echo "<br>改进";
    $count2 = 0;
    for($gongji = 0;$gongji <= 100/5;$gongji++){
        for($muji = 0;$muji <= 100/3;$muji++){
            for($xiaoji = 0;$xiaoji <= 100;$xiaoji++){
                $count2++;
                if(($gongji + $muji + $xiaoji == 100) && (5 * $gongji + 3 * $muji + 1/3 * $xiaoji == 100)){
                    echo "<br>公鸡{$gongji}只，母鸡{$muji}只，小鸡{$xiaoji}只";
                    // return;
                }
            }
        }
    }
    echo "<br>一共计算了{$count2}次";
    echo "<br>改进2";
    $count3 = 0;
    for($gongji = 0;$gongji <= 100/5;$gongji++){
        for($muji = 0;$muji <= (100 - $gongji * 5)/3;$muji++){
            $xiaoji = 100 - $gongji - $muji;
            if($xiaoji % 3 != 0){
                continue;
            }
            $count3++;
            if(5 * $gongji + 3 * $muji + 1/3 * $xiaoji == 100){
                echo "<br>公鸡{$gongji}只，母鸡{$muji}只，小鸡{$xiaoji}只";
                // return;
            }
        }
    }
    echo "<br>一共计算了{$count3}次";