<?php
    //abstract class (php5 supports no need to use this in php7.traits are used)
    //Ex. two parents has one child. and that child can access property of both parents
    abstract class A 
    {
        abstract function fun();
    }
    class B extends A 
    {
        function fun()
        {
            echo "abstract method of abstract class of class A<br>";
        }
        function abc()
        {
            echo "method of class B<br>";
        }
    }
    $obj=new B();
    $obj->abc();
    $obj->fun();
?>