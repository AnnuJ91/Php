<?php
    trait Reader
    {
        public function add($a,$b)
        {
            return $a+$b;
        }
    }
    trait Writer
    {
        public function multi($a,$b)
        {
            return $a*$b;
        }
    }
    class File
    {
        use Reader,Writer;
        public function calculate($a,$b)
        {
            echo "Addition is: ".$this->add($a,$b);
            echo "<br>Multiplication is: ".$this->multi($a,$b);
        }
    }
    $obj=new File();
    $obj->calculate(10,20);
?>