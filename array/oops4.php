<?php
    //interface:- single parent

    interface A 
    {
        function abc();
        
    }
    interface B 
    {
        function xyz();
       
    }
    class C implements A,B 
    {
        function abc()
        {
            echo "claa A<br>";
        }
        function xyz()
        {
            echo "class B<br>";
        }
        function www()
        {
            echo "class C<br>";
        }
    }

    $obj=new C();
    $obj->abc();
    $obj->xyz();
    $obj->www();

?>