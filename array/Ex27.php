<?php
    //ksort():- it sort an associative array in ascending order according to the keys
    $arr=array("name"=>"annu","location"=>"pune","country"=>"india","andhra"=>"maharashtra");
    ksort($arr);
    foreach($arr as $k=>$v)
    {
        echo $k." = ".$v."<br>";
    }
    //krsort():- it sort an associative array in descending order according to the keys
    echo "<br><br>krsort() Example<br>";
    $arr1=array("name"=>"annu","location"=>"pune","country"=>"india","andhra"=>"maharashtra");
    krsort($arr);
    foreach($arr as $k=>$v)
    {
        echo $k." = ".$v."<br>";
    }

?>