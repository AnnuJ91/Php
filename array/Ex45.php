<?php

    //find number is prime or not
    $num=7;
    $flag=0;
    for($i=2;$i<=$num;$i++)
    {
        if($num%$i==0)
        {
            $flag=1;
            break;
        }
    }
    if($flag==0)
    {
        echo "prime number";

    }
    else
    {
        echo "not prime number";
    }

?>