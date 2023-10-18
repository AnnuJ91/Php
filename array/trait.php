<?php
    trait hello{
        public function sayhello()
        {
            echo "hello everyone<br>";
        }
         public function saybye()
        {
            echo "bye everyone<br>";
        }
    }
    trait hi{
        public function sayhi()
        {
            echo "hii everyone<br>";
        }
    }
    class base{
        use hello,hi;
        
    }
    $obj=new base();
    $obj->sayhello();
    $obj->sayhi();
      $obj->saybye();
?>