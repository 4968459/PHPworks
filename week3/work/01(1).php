<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 获取当前系统时间的秒数值，当秒数值为单数时显示文字“当前秒数值是单数”；否则显示文字“当前秒数值是双数”。 -->
    <?php
    $a = date("s");
    echo $a;
    
    
   echo '<br>';

    if($a%2==0){
        echo "当前秒数值是双数";
    }else {
        echo "当前秒数值是单数";
    };
    ?>
</body>
</html>


