<?php
    abstract class parentClass{
        public $name;
        abstract protected function calc($a,$b);
    }

    class childClass extends parentClass{
        public function calc($a,$b)
        {
            echo $a+$b;
        }
    }

    $obj=new childClass();
    $obj->calc(10,20);
?>