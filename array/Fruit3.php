 <?php
    class Fruit3
    {
        public $name;
        public $color;
        function __construct($name,$color)
        {
            $this->name=$name;
            $this->color=$color;
        }
        protected function intro()
        {
            echo "The fruit is {$this->name} and the color is {$this->color}";
        }
    }
    class Strawberry extends Fruit3
    {
        public function message()
        {
            echo "Am I a fruit or a berry?";
            $this->intro();
        }
    }
    $strawberry=new Strawberry("Strawberry","red");
    $strawberry->message();
   


?>