<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3. 从键盘输入一个三位数字的正整数，求其倒序数字。（例如：123，它的倒序数字是321）（18.php）</title>
</head>

<body>
    <!-- 3.	从键盘输入一个三位数字的正整数，求其倒序数字。（例如：123，它的倒序数字是321）（18.php） -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        请输入三个数字：<br>
        <input type="number" name="num" id="num">
        <br>
        <input type="submit" value="提交">
    </form>
    <?php
        $num=$_POST["num"];
        $s=''; //保存结果
        $len = mb_strlen($num);//获取长度
        for($i=$len;$i>=0;$i--){
            $s=$s.$num[$i];//字符拼接
        }   
        echo $s;
    ?>
</body>

</html>