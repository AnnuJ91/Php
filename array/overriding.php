<?php



/*$a="this is a string";
$b="hello this is str split ";
print_r(explode(" ",$a));
echo "<br>";
print_r(str_split($b,3));
die(); */


    trait hello{
        public function sayhello()
        {
            echo "hello from trait<br>";
        }
         
    }
    class base{
        public function sayhello()
        {
            echo "hello from class<br>";
        }
    }
    class child extends base{
        use hello;
        public function sayhello()
        {
            echo "hello from base class<br>";
        }
        
    }
    $obj=new child();
    $obj->sayhello();
    
?>