<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //判断是否提交了参数
    if (isset($_POST['submit'])){	
    $num = $_POST['textfield'];

    //判断是否是数字
    if (is_numeric($num)){		
    $num = $_POST['textfield'] + 0;
    //判断是否整型
    if (is_int($num)){
            if ($_POST['textfield']%2==0){
                echo "{$num}是偶数";
    }else{
                echo "{$num}是奇数";
        }
    }else{
                echo "{$num}不是个整数";
            }
        }else{
            echo "{$num}不是数字";
        }
};
?>

</body>
</html>