<?php
    $arr=array(1,4,5,20,99,10,101,45,7);

    foreach($arr as $k=>$v)
    {
        if($v%2==0)
        {
            echo "<p style=color:blue;>".$v." - even no"."</p>";
        }
        else
        {
            echo "<p style=color:red;>".$v." - odd number"."</p>";
        }
    }

?>