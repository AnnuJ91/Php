<?php
    $arr=array(
        array("gourab","g@gmail.com","kolkata"),
        array("anuradha","a@gmail.com","pune"),
        array("amar","ar@gmail.com","bokaro"),
        array("vedika","v@gmail.com","jamkhed")
    );
   // echo sizeof($arr[0]);
   echo "<ol type='a'>";
   /* for($i=0;$i<sizeof($arr);$i++)
    {
        echo "<li>";
        for($j=0;$j<sizeof($arr[$i]);$j++)
        {
            echo  $arr[$i][$j]."   ";
        }
        echo "</li>";
    }
    echo "</ol>";
    */
    echo "<ol type='a'>";
    foreach($arr as $key => $val)
    {
        echo "<li>";
        foreach($val as $k=>$v)
        {
            echo $v." ";
        }
        echo "</li>";
    }
    echo "</ol>";
?>