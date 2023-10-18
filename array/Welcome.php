<?php
    trait message1
    {
        public function msg1()
        {
            echo "This is trait method<br>";
        }
    }
    trait message2
    {
        public function msg2()
        {
            echo "This is seocnd trait<br>";
        }
    }
    trait message3
    {
        public function msg3()
        {
            echo "This is third trait<br><br>";
        }
    }
    class Welcome
    {
        use message1;
        use message2;
        use message3;
    }
    class Welcome2
    {
        use message2;
        use message3;
    }
    $obj=new Welcome();
    $obj->msg1();
    $obj->msg2();
    $obj->msg3();

    $obj2=new Welcome2();
    $obj2->msg2();
    $obj2->msg3();

?>