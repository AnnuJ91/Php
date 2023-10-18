<?php
    $arr=array("jonny","tae","johnjae",12,90);
    $arr[5]="jkook";
    $arr[6]=10.05;

    foreach($arr as $key=>$val)
    {
        print $key." - ".$val."<br>";
    }
?>