<?php
    include 'pdo_conn.php';

    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $salary=$_POST['salary'];

    $query="INSERT INTO `test1`(`NAME`, `EMAIL`, `MOBILE`, `SALARY`) VALUES (:name,:email,:mobile,:salary)";

    $data=$conn->prepare($query);
    $data->bindparam(':name',$name);
    $data->bindparam(':email',$name);
    $data->bindparam(':mobile',$mobile);
    $data->bindparam(':salary',$salary);

    if($data->execute())
    {
        header("location:pdo_display.php");
    }
    else
    {
        echo "Not inserted";
    }

?>