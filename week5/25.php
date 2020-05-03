<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>兔子</title>
</head>

<body>
    <!-- 10.	
    有一对兔子，
    出生一个月后变成一对小兔子，
    两个月后生出第一小兔子，自己变成一对老兔子，
    此时共有二对兔子，(一老一小)，三个月后，
    老兔子又生出一对小兔子，上个月生的小兔子变成大兔子，
    此时共有三对(老、大小各一对)，四个月后，大变老、小变大，
    二对老兔子又生二对小兔子，此时共有五对(老、小各二对，大的一对)。
    计算11个月后共有多少对兔子？（25.php）
 -->
    <?php
    // 使用递归函数
    function fun($n)
    {
        if ($n == 1 || $n == 2) {
            return 1;
        } else {
            return fun($n - 1) + fun($n - 2);
        }
    }
    echo fun(11) . '<hr>';
    // 第二种方法
    function getResult($month)
    {
        $one = 1; //第一个月兔子的对数
        $two = 1; //第二个月兔子的对数
        $sum = 0; //第$month个月兔子的对数
        if ($month < 3) {
            return;
        }
        for ($i = 2; $i < $month; $i++) {
            $sum = $one + $two;
            $one = $two;
            $two = $sum;
        }
        echo $month . '个月后共有' . $sum . '对兔子';
    }
    getResult(11);
    ?>

</body>

</html>