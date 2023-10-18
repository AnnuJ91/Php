<?php
    //array_key_exists()
    $arr=array("annu"=>"Pune","amar"=>"bokaro","shrishti"=>"delhi","siddhi"=>"jamkhed");

    if(array_key_exists("annu",$arr))
    {
        echo "Key is exsist in an array";
    }
    else
    {
        echo "Key does not exsist in an array";
    }
?>