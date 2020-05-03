<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 
        15.	
        任意输入一个数（输入0结束程序），
        判断该数是否是3的倍数又是7的倍数，
        如果是则输出该数。
        不是就显示“Not enough!”（30.php）
     -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        请输入一个整数：<br>
        <input type="number" name="n">
        <input type="submit" value="提交">
    </form>
    <?php
    if ($_GET) {
        $n = $_GET['n'];
        if ($n == 0) {
            echo "程序退出";
        } else if ($n % 3 == 0 && $n % 7 == 0) {
            echo "您输入的数（{$n}）可以被3和7整除";
        } else echo 'Not enough!';
    } else echo '请输入一个数字开始运行'
    ?>
</body>

</html>