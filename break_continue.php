<?php

    for($a=1;$a<=10;$a++)
    {
        if($a==3)
        {
            echo "No".$a."<br>";
            //break; //It breaks and exit from execution.
            continue;//exececution cursor checks for continue and execution goes toward for loop
        }
        echo "Number:".$a."<br>";
    }
?>