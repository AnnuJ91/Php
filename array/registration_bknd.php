<?php
    include "connection.php";

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $language=implode(",",$_POST['language']);
    $course=$_POST['course'];

   
   $image=$_FILES["img"]["name"];
    
    $new_image=rand(1000,9999).'-'.time().'-'.$image;
    $upload_path="upload/".$new_image;
    $source_path=$_FILES["img"]["tmp_name"];

    if(move_uploaded_file($source_path,$upload_path))
    {
        $sql=mysqli_query($conn,"INSERT INTO `test2`(`id`, `name`, `email`, `password`, `phone`, `address`, `gender`, `dob`, `language`, `course`, `image`)
        VALUES ('','$name','$email','$pass','$phone','$address','$gender','$dob','$language','$course','$upload_path')")
        OR DIE(mysqli_error($conn));
        
        if($sql)
        {
            header('location:display.php');
        }
        else
        {
            echo "unsuccessfull";
        }
     }
     
?>