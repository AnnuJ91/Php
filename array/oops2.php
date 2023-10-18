<?php
    //multilevel inheritance

    class A
    {
        function fun()
        {
            echo "this is parent class<br>";
        }

    }
    class B extends A
    {
        function abc()
        {
            echo "this is child class<br>";
        }

    }

    class C extends B 
    {
        function xyz()
        {
            echo "this is sub class of child class<br>";
        }
    }

    $obj=new C();
    $obj->xyz();
    $obj->abc();
    $obj->fun();
?>