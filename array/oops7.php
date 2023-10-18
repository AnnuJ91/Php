<?php


    //type hinting

    class A 
    {
        public function fun1()
        {
            echo "hiii";
        }
    }
    class B
    {
        public function fun2()
        {
            echo "bye";
        }
    }
    function c(A $c)
    {
        $c->fun1();
    }

    $obj=new A();
    c($obj);
    die();

    function fun(array $val)
    {
        foreach($val as $v)
        {
            echo $v."<br>";
        }
    }

    $a=["Apple"];
    fun($a);

?>