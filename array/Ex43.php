<?php
    //sum of digits 14597
    $num=14597;
    $rem=0; 
    $sum=0;
    for($i=0;$i<$num;$i++)
    {
        $rem=$num%10;
        $sum=$sum+$rem;
        $num=$num/10;

    }
    echo $sum;

?>