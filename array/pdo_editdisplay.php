<?php
    include 'pdo_conn.php';
    $uid=$_REQUEST['uid'];
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $mobile=$_REQUEST['mobile'];
    $salary=$_REQUEST['salary'];

    //echo $uid,$name,$email,$mobile,$salary;
    $query= "UPDATE `test1` SET `NAME`=:name,`EMAIL`=:email,`MOBILE`=:mobile,`SALARY`=:salary WHERE ID=:'$uid'";
   
    $data=$conn->prepare($query);
    
    $data->bindparam(':name',$name);
    $data->bindparam(':email',$email);
    $data->bindparam(':mobile',$mobile);
    $data->bindparam(':salary',$salary);

    if($data->execute())
    {
        echo "Update data successfull";
        header('location:pdo_display.php');
    }
    
    else
    {
        echo "not inserted";
    }


?>