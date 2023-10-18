<?php
    $servername="localhost";
    $username="root";
    $password="";

    try{
        $conn=new PDO("mysql:host=$servername;dbname=exam",$username,$password);
    }
    catch(PDOExceptio $e)
    {
        echo "Connection failed: ".$e->getMessage();
    }

?>