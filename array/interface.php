<?php
    interface A{
        function hello($n);
    }
    interface B{
        function hi($n);
    }
    class C implements A,B{
        public function hello($n)
        {
            echo "<br>hello ".$n;
        }

        public function hi($n)
        {
            echo "<br>hi ".$n;
        }

        public function bye($n)
        {
            echo "<br>bye ".$n;
        }
    }

    $obj=new C();
    $obj->hello('annu');
    $obj->hi('amar');
    $obj->bye('siddhi');
?>

