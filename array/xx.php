<?php
    $a=array("name"=>"anu","id"=>"098","address"=>"pune");

    $b=array("name"=>"anu","id"=>"098","address"=>"pune");

    print_r(array_keys($a));
    echo "<br>";
    print_r(array_values($b));

    echo "<br>";

    foreach($a as $k=>$v)
    {
        echo $k."=".$v."<br>";
    }
?>