<?php
    class Fruit5
    {
        const HI="Hello";
        public function bye()
        {
            echo self::HI."<br>";
        }
    }
    $f=new Fruit5();
    $f->bye();
    echo Fruit5::HI;

?>