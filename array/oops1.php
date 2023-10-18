<?php
    //single inheritance
class A
{
    function fun()
    {
        echo "Parent class";
    }  
}
class B extends A
{
    function abc()
    {
        echo "child class";
    }
}

$obj=new B();
$obj->abc();
echo "<br>";
$obj->fun();
?>