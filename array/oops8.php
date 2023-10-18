<?php
    class A 
    {
        function fun1()
        {
            echo "fun1()<br>";
            return $this;
        }
        function fun2()
        {
            echo "fun2()<br>";
            return $this;
        }
        function fun3()
        {
            echo "fun3()<br>";
        }
    }
    $obj=new A();
    $obj->fun1()->fun2()->fun3();
    //$obj->fun2();
    //$obj->fun3();

?>