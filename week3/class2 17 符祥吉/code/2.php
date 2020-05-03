<?php
$date1 = localtime(time(), true);
$H = $date1['tm_hour'];

if($H<10){
    echo 'Hello,Good morning!';
};