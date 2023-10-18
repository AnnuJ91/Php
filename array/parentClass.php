<?php
    abstract class parentClass
    {
        abstract protected function prefixName($name);
    }
    class childClass extends parentClass
    {
        public function prefixName($name,$seperator=".",$greet="Dear")
        {
            if($name=="Joon Jae")
            {
                $prefix="Mr.";

            }
            else if($name=="Kim Tan")
            {
                $prefix="Mrs.";
            }
            else
            {
                $prefix=" ";
            }
            return "{$greet}{$prefix}{$seperator}{$name}";
        }
    }
    $obj=new childClass();
    echo $obj->prefixName("Joon Jae");
    echo "<br>";
    echo $obj->prefixName("Kim Tan");
    


?>