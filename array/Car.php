<?php
    abstract class Car
    {
        public $name;
        public function __construct($name)
        {
            $this->name=$name;
        }
        abstract public function intro():string;

    }
    class Audi extends Car
    {
        public function intro():string
        {
            return "This is aurdi car";
        }

    }
    class Volvo extends Car
    {
        public function intro():string 
        {
            return "This is Volvo car";
        }
    }
    class Citreon extends Car 
    {
        public function intro():string 
        {
            return "This is Citreon car";
        }
    }
    $audi=new Audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $volvo=new Volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";

    $citreon= new Citreon("Citreon");
    echo $citreon->intro();
    echo "<br>";

?>