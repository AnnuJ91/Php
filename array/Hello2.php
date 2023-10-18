<?php
    class domain
    {
        protected static function getWebsiteName()
        {
            return "W3Schools.com";
        }
    }
    class Hello2 extends domain
    {
        public $websiteName;
        public function __construct()
        {
            $this->websiteName=parent::getWebsiteName();
           
        }
    }
    $hello2=new Hello2();
    echo $hello2->websiteName;



?>