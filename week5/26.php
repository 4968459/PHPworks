<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11. 计算机产生一个 0-100的随机整数，由你猜：计算机对你猜的数分别不同情况作出三种不同的反应，太大(TOO BIG)，太小(TOO SMALL)，正好(FIT)。当猜着时，就输出你猜的次数和猜中的数。（26.php）</title>
</head>

<body>
    <!-- 11.	计算机产生一个 0-100的随机整数，由你猜：计算机对你猜的数分别不同情况作出三种不同的反应，太大(TOO BIG)，太小(TOO SMALL)，正好(FIT)。当猜着时，就输出你猜的次数和猜中的数。（26.php） -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        请输入一个数字<br>
        <input type="number" name="num">
        <input type="submit" value="开始">
    </form>
    <?php
    if ($_GET['num']) {
        $num = $_GET['num'];
        $num1 = mt_rand(0, 100);
        if ($num < $num1) {
            echo "电脑是{$num1},您输入的是{$num}。您的小(TOO SMALL)";
        } elseif ($num > $num1) {
            echo "电脑是{$num1},您输入的是{$num}。您的大(TOO big)";
        } else {
            echo "电脑是{$num1},您输入的是{$num}。正好相等(FIT)";
        }
    }
    ?>
</body>

</html>