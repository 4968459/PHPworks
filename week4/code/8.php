<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>任务二：在表单中获取一个整数N，在网页上打印N个*。（8.php）
    </title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        请输入数字：<br><input type="number" name="N" id="N"><br>
        <input type="submit" value="提交">
    </form>
    <?php
        $N=$_GET['N'];
        for($i=0;$i<$N;$i++){
            echo '*';
        }
    ?>
</body>

</html>