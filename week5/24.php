<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9. 100匹马驮100担货，大马一匹驮3担，中马一匹驮2担，小马2匹驮1担。计算大、中、小马的数目。（24.php）</title>
</head>

<body>
    <!-- 
        100匹马驮100担货，
        大马一匹驮3担，
        中马一匹驮2担，
        小马2匹驮1担。
        计算大、中、小马的数目。（24.php）
     -->
    <?php
    echo "可以有以下几种情况出现：<hr>";
    for ($i = 1; $i <= 33; $i++) { //大马
        for ($j = 1; $j <= 50; $j++) { //中马
            $k = 100 - $i - $j;
            if($i*3+$j*2+$k/2==100){
                echo "大马{$i}只-中马{$j}只-小马{$k}只<br>";
            }
        }
    }
    ?>

</body>

</html>