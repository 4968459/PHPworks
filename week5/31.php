<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. 凳子板凳三十三，百个腿腿地上翻，问凳子板凳各多少？（31.php）
        提示：凳子四个腿，板凳两个腿
    </title>
</head>

<body>
    <!-- 1.	
    凳子板凳三十三，
    百个腿腿地上翻，
    问凳子板凳各多少？（31.php）
        提示：凳子四个腿，板凳两个腿
 -->
    <?php
    $n = 0;
    for ($i = 0; $i <= 33; $i++) {
        for ($j = 0; $j <= 33; $j++) {
            $n++;
            if ($i + $j == 33 && $i * 4 + $j * 2 == 100) {
                echo "凳子{$i}张，板凳{$j}张";
                break 2;
            }
        }
    }
    echo "<hr>运行了{$n}次";
    ?>
</body>

</html>