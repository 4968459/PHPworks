<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>小猴吃桃问题</title>
</head>
<body>
    <!-- 
        14.	小猴吃桃问题。
        小猴第一天摘了一堆桃子，
        小猴吃掉桃子一半，觉得不过瘾，
        又吃多一个；第二天小猴吃掉剩下的一半还是觉得不过瘾，
        又多吃了一个；每天都吃掉剩下的一半加一个；
        到了第十天，只剩下1个桃子了。
        请问猴子第一天一其摘了多少个桃子？（29.php）
     -->
     <?php
        $s=1;
        for($i=1;$i<10;$i++){
            $s=2*($s+1);
        }
        echo "猴子第一天一其摘了{$s}个桃子";
     ?>
</body>
</html>