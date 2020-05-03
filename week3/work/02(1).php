<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- （1）获取当前系统时间的秒数值，当秒数值除4余1时显示文字“除4余1”；，当秒数值除4余2时显示文字“除4余2” ，当秒数值除4余3时显示文字“除4余3” ，当秒数值除4余0时显示文字“除4余0”  -->
    <?php
    $a = date("s");
    echo $a;


    echo '<br>';

    switch ($a % 4) {
        case '1':
            # code...
            echo '除4余1';
            break;
        case '2':
            # code...
            echo '除4余2';
            break;
        case '3':
            # code...
            echo '除4余3';
            break;
        case '0':
            # code...
            echo '除4余0';
            break;
    }
    ?>

</body>

</html>