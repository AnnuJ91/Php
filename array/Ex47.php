<?php
    //find armstrong number
    $num=502;
    $a=$num;
    
    $sum=0;
    while($a!=0)
    {
        $rem=$a%10;
        $sum=$sum+($rem*$rem*$rem);
        $a=$a/10;
    }
   if($num==$sum)
   {
    echo " armstrong number";
   }
   else
   {
    echo " not a armstrong number";
   }

?>