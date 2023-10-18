<?php
    include 'pdo_conn.php';

    $uid=$_REQUEST['ep'];
   
    $query="DELETE FROM `test1` WHERE ID=:id";
    
    $data=$conn->prepare($query);
 
    if($data->execute(array(":id"=>$uid)))
    {
        header('location:pdo_display.php');
    }

?>