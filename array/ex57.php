<?php
    $arr=array(
        array("volvo",22,18),
        array("BMW",15,18),
        array("saab",5,2),
        array("Land Rover",17,15)
    );
    
    for($i=0;$i<4;$i++)
    {   echo "Row number ".$i;
        echo "<ul>";
        for($j=0;$j<3;$j++)
        {
            echo "<li>".$arr[$i][$j]."</li>";
        }
        echo "</ul>";
       
    }
   
    
?>