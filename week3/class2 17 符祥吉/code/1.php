<?php
    $arr =$_POST;
    $a = (int)$arr['a'];
    $b = (int)$arr['b'];
    $yunsuan = $arr['yunsuan'];
    $resut = 0;
    
    echo '<br>';
/*
    if($yunsuan =='+'){
        $resut = $a+$b;
        
    }elseif($yunsuan=='-'){
        $resut= $a-$b;
        
    }elseif($yunsuan=='*'){
        $resut= $a*$b;
        
    }elseif($yunsuan=='/'){
        $resut= $a/$b;
        
    };*/
    switch($yunsuan){
        case '+':
        $resut = $a+$b;
        break;
        case '-':
        $resut = $a+$b;
        break;
        case '*':
        $resut = $a*$b;
        break;
        case '/':
          $resut = $a/$b;
        break;
    };
   
    echo "$a$yunsuan$b 的结果为 $resut";