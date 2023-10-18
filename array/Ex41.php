<?php
    $arr=array(354,56,7,888,000,233);
    sort($arr);
    echo "<ol type=1>";
    for($i=0;$i<count($arr);$i++)
    {
        echo "<li>".$arr[$i]."</li>";
    }
    echo "</ol>";

    $arr1=array("name"=>"annu","id"=>1111,"city"=>"pune","state"=>"maharashtra");
    ksort($arr1);
    print_r($arr1);

    echo "<br>";
    arsort($arr1);
    print_r($arr1);

?>