<?php
    $arr=array("abc","xyz",12,3,100);
    var_dump($arr);

    for($i=0;$i<sizeof($arr);$i++)
    {
        print "<br>".$i." - ".$arr[$i];
    }

?>