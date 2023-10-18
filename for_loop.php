<?php

  /*  for($a=10;$a>=1;$a--)
    {
        echo $a.") Yahoo baba<br>";
    }

    >*/

    for($a=1;$a<=100;$a=$a+10)
    {
        for($b=$a;$b<$a+10;$b++)
        {
            echo $b." ";
        }
        echo "<br>";
    }
?>