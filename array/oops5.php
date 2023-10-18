<?php
    trait A
    {
        function abc()
        {
            echo "A";
        }
    }
    trait B
    {
        function mno()
        {
            echo "B";
        }
    }
    class C 
    {
        use A,B;
        function xyz()
        {
            echo "C";
        }
    }

    $obj=new C;
    $obj->mno();



?>