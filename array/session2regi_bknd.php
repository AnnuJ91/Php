<?php

    include 'connection.php';

    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];

    $sql="INSERT INTO `sessionex`(`id`, `name`, `email`, `password`) VALUES ('','$name','$email','$pass')";
    $result=mysqli_query($conn,$sql);

   // print_r($result);
   // die('hi');
    if($result)
    {
        header('location:session2login.php');
    }
    else
    {
        echo "not inserted";
    }

?>