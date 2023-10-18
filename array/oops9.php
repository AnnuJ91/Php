<?php

        //--get()

        class abc{
            private $data=["name"=>"yahoo baba","course"=>"php","fees"=>"2000"];
            public function __get($key)
            {
                if(array_key_exists($key,$this->data))
                {
                        return $this->data[$key];
                }
                else
                {
                    return "This key($key) is not defined";
                }
                
            }
        }
        $obj=new abc();
        echo $obj->age;
       // print_r($obj->data);

?>