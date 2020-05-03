<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.	输出三个数中的最大数和最小数。（17.php）</title>
</head>
<body>
    <!-- 2.	输出三个数中的最大数和最小数。（17.php） -->
    <?php
        // 先定义三个数
        $a=-41;
        $b=15;
        $c=9;

        $max=0;
        $min=0;
        // 接下来计算
        if($a<$b&&$a<$c){
           $min = $a;
        }elseif($b<$a&&$b<$c){
            $min = $b;
        }else{
            $min = $c;
        }
        if($a>$b&&$a>$c){
            $max = $a;
         }elseif($b>$a&&$b>$c){
             $max = $b;
         }else{
             $max = $c;
         }
        echo "{$a}、{$b}、{$c}最小值为{$min}<br>";
        echo "{$a}、{$b}、{$c}最大值为{$max}"
    ?>
</body>
</html>