<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>百钱买百鸡。用100元买100只鸡，其中有公鸡、母鸡和小鸡；公鸡每只5元，母鸡每只3元，小鸡每三只1元。请问有多少种买法</title>
</head>
<body>
    <!-- 1.	百钱买百鸡。用100元买100只鸡，其中有公鸡、母鸡和小鸡；公鸡每只5元，母鸡每只3元，小鸡每三只1元。请问有多少种买法？（16.php） -->
    <?php
        $s = 0;
        for($a=0;$a<=20;$a++){
            for($b=0;$b<=33;$b++){
                $c=100-$a-$b;
                if($a*5+$b*3+$c/3==100){
                    $s++;
                    echo "公鸡{$a}只，母鸡{$b}只，小鸡{$c}只。<br>";
                }
            }
        }
        echo "答：<br>  共有{$s}种买法";
    ?>
</body>
</html>