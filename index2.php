<?php


$a=[1,2,3,4,5];
$b=['Bunny','John','Mary','David','Joy'];
$c=[
    '國文'=>99,
    '英文'=>55,
    '理化'=>78
];
echo $a[0];
echo $b[1];
echo $c['國文'];


if(is_array($a)){
    echo"是陣列";
    }else{
        echo"不是陣列";
    }

    ?>
