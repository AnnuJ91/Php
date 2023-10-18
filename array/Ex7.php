<?php
    $arr=array("echo","print","print_r",10,2,2.99,88888,'A');
    foreach($arr as $k=>$v)
    {
        echo $v." - ".gettype($v)."<br>";
    }

   
?>