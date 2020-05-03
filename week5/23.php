<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8. 马戏团有鸟和大象，它们共有36个头，100只脚。问有多少只鸟和大象？（23.php）</title>
</head>

<body>
    <!-- 8.	马戏团有鸟和大象，
    它们共有36个头，100只脚。
    问有多少只鸟和大象？（23.php） -->
    <?php
    for ($i = 1; $i <= 36; $i++) { //大象
        $j = 36 - $i;
        if ($i * 4 + $j * 2 == 100 && $i + $j == 36)
            echo "{$i}只大象，{$j}只鸟";
    }
    ?>
</body>

</html>