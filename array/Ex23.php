<?php
    //array_unique():-it is used to removed repeated value from an array
    $arr=array(0,8,6,5,7,8,9,0,8,8,8,8,8,0,0,1,2,3,2,2,1);
    $ass=array("annu"=>"pune","amar"=>"pune","hello"=>"nagpur");

    print_r(array_unique($arr));
echo "<br>";
    print_r(array_unique($ass));

?>