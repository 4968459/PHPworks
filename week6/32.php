<?php
    echo '<h2>1. 求1+1/2+1/3+……+1/50=？（32.php）（试用数组来完成编程）</h2>';
    // 1、先创建数组
    $arr = [];
    // 保存结果变量
    $resut = 0;
    for($i=1;$i<=50;$i++){
        $arr[$i-1] = 1/$i;
    }
    // var_dump($arr);

    // 接下来开始计算
        // 遍历数组
    foreach($arr as $item ){
        // echo $item.'<br>';
        $resut = $item + $resut;
    }
    // 输出结果
    echo "计算结果为".$resut;
