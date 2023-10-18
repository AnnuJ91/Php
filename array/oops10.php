<?php
    //__set()


    class student{
        private $name;
        public function hello()
        {
            echo $this->name;
        }
        public function __get($property)
        {
            echo "You are trying to access non existing private property";
        }
        public function __set($property,$value)
        {
            if(property_exists($this,$property))
            {
                $this->$property=$value;
            }
            else
            {
                echo "property does not exsist: $property";
            }
        }
    }
    $obj=new student();
    $obj->name="yahoo baba";
    $obj->hello();

?>