<?php
    //rsort():- it is used to sort elements of an array in descending order
    $arr=array("anu","xxx","xyz","www","aaa");
    rsort($arr);
    for($i=0;$i<count($arr);$i++)
    {
        echo $arr[$i]."<br>";
    }

?>