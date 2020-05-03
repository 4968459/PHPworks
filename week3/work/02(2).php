<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- （1）获取当前系统时间的秒数值，当秒数值除4余1时显示单元格“除4余1”；，当秒数值除4余2时显示单元格“除4余2” ，当秒数值除4余3时显示单元格“除4余3” ，当秒数值除4余0时显示单元格“除4余0”（1行1列的表格）  -->

    <table>
        <tr>
            <td style="border: 1px #000 solid"> <?php
                                                $a = date("s");
                                                
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
            </td>
        </tr>
    </table>

</body>

</html>