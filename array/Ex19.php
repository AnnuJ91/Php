<?php

    //array_map():-
     
        $arr=array(3,6,7,8,8,9,3);
        function fun($num)
        {
            return $num+10;
        }
        print_r(array_map("fun",$arr));


?>