<?php
    class Greetings
    {
        public static function welcome()
        {
            echo "Hello World";
        }
       /* public function __construct()
        {
            echo "<br> This is constructor";
            self::welcome();
        }*/
    }
    class Hello
    {
        public function message()
        {
            Greetings::welcome();
        }
    }
   // Greetings::welcome();
   $obj=new Hello();
    $obj->message();

?>