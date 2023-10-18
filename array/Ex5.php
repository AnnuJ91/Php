<?php
        $a1=array("annu","amar","mishti","vedika");
        $a2=array("orange","red","blue");
        $a3=array("banana","apple","grapes");
        $a4=[$a1,$a2,$a3];

        foreach($a4 as $key => $val)
        {
            foreach($val as $k => $v)
            {
                echo $k . " - " . $v;
            }
            echo "<br>";
        }
?>