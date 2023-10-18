<?php


    function division($n)       
    {
        try{
            if($n<=0)
            {
                throw new Exception("<br>Enter valid number<br>");
            }
            $div=2/$n;

        echo $div;
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
    
    
    }
    
    division(5);
    division(0);
    division(2);
    division(3);

?>