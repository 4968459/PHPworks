<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>任务四：在表单中获取一个整数N，在网页上打印N行*等腰三角形。（10.php）
    </title>
    <style>
        * {
            margin: 0;
            padding: 0
        }
    </style>
</head>

<body style="text-align: center">
    <form style="margin-bottom: 65px" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        请输入数字：<br><input type="number" name="N" id="N"><br>
        <input type="submit" value="提交">
    </form>
    <!-- <div style="color:blue"> -->
    <?php
    $N = $_GET['N'];
    $i1 = 1;
    for ($i = 1; $i <= $N; $i++) {
        echo str_repeat("&nbsp;", $N - $i);
        if ($i % 2 == 0) {
            echo writeName(" <span style='color:red'>*</span> ", $i1);
        } else {
            echo writeName(" <span style='color:green'>*</span> ", $i1);
        };
        echo str_repeat("&nbsp", $N - $i);
        echo '<br>';
        $i1 = $i1 + 2;
    }
    function writeName($str, $n)
    {
        for ($i = 0; $i < $n; $i++) {

            if ($i % 2 == 0) {
                echo "<span style='color:blue'>*</span>";
            } else {
                echo "$str";
            }
        }
        // echo "Kai Jim Refsnes";
    }

    ?>

    <!-- </div> -->
</body>

</html>