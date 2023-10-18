<?php
    class Fruit1
    {
       public $name;
        public $color;

        function __construct($name,$color)
        {
            $this->name=$name;
            $this->color=$color;
            
        }   
        function get_name()
        {
            return $this->name;
        }
        function get_color()
        {
            return $this->color;
        }

    }
       $f= new Fruit1("Apple","Red");
       echo "Fruit name is : ".$f->get_name();
       echo "<br>";
        echo "Friut color is: ".$f->get_color();

?>