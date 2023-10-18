<?php
include 'connection.php';
$uid=$_REQUEST['ep'];
$sql=mysqli_query($conn,"DELETE FROM `test2` WHERE id='$uid'");

if($sql)
{
    header('location:display.php');

}



?>