<?php
    //find number is palindrome or not ex. 505
    $num=505;
    $rev=strrev($num);
    if($num==$rev)
    {
        echo "Its palindrome number";
    }
    else
    {
        echo "It is not palindrome number";
    }
?>