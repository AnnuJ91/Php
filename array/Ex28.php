<?php
    //asort():- it sort an associative array in ascending order according to the values
    $arr=array("name"=>"annu","location"=>"pune","country"=>"india","andhra"=>"maharashtra");
    ksort($arr);
    
    foreach($arr as $k=>$v)
    {
        echo $k." = ".$v."<br>";
    }

     //arsort():- it sort an associative array in descending order according to the values
    echo "<br><br>krsort() Example<br>";
    $arr1=array("name"=>"annu","location"=>"pune","country"=>"india","andhra"=>"maharashtra");
    krsort($arr);
    foreach($arr as $k=>$v)
    {
        echo $k." = ".$v."<br>";
    }

?>